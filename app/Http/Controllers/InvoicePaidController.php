<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePaid;
use App\Models\Room;
use App\Models\RoomRent;
use App\Models\SystemInfo;
use App\Notifications\InvoicePaidNotification;
use Barryvdh\DomPDF\Facade\Pdf as Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Str;

class InvoicePaidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $start = $request->start_date == '' ? Carbon::parse(date('y-m-d'))->startOfMonth() : Carbon::parse($request->start_date)->startOfDay(); // Sets the time to 00:00:00
        $end = $request->end_date == '' ? Carbon::parse(date('y-m-d'))->endOfMonth() : Carbon::parse($request->end_date)->endOfDay(); // Sets the time to 23:59:59

        $query = DB::table('invoice_paids')
            ->join('rooms', 'rooms.id', '=', 'invoice_paids.room_id')
            ->select('*', 'invoice_paids.created_at as invoice_created_at', 'invoice_paids.id as invoice_id', 'rooms.name as room_name', 'rooms.id as room_id')
            ->where(function ($query) use ($keyword) {
                $query->where('room_number', 'like', '%' . $keyword . '%')
                    ->orWhere('name', 'like', '%' . $keyword . '%');
            })
            ->where(function ($query) use ($start, $end) {
                $query->whereBetween('invoice_paids.created_at', [$start, $end]);
            });
        // Log the generated SQL query
        Log::info($query->toSql());
        $invoices = $query->paginate(10);
        return view('invoice.invoice_list', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function invoiceEletroticWater()
    {
        $rooms = Room::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $sysInfo = SystemInfo::first();
        return view('invoice.create_invoice_eletrotic_water', compact('sysInfo', 'rooms', 'customers'));
    }

    public function sendByOne($id)
    {
        $invoicePaid = InvoicePaid::with('roomRent.room.customer')->find($id);

        // // You can access the related data as follows:
        // $roomRent = $invoicePaid->roomRent;
        // $room = $roomRent->room;
        // $customer = $roomRent->customer;

        $filename = 'Room_'.$invoicePaid->room_id."_invoices_".date('M').".pdf";
        
        // $parts = explode('/', $invoicePaid->invoice_date);

        // $data = [
        //     'filename' => $filename,
        //     'invoiceDay' => $parts[0],
        //     'invoiceMonth' => $parts[1],
        //     'invoiceYear' => $parts[2],
        //     'customer' => $customer->name,
        //     'invoiceDate' => $invoicePaid->invoice_date,
        //     'room_name' => $room->room_number,
        //     'room_cost' => '$'.$invoicePaid->room_cost,
        //     'electric_cost' => '$'.$invoicePaid->electric_cost,
        //     'water_cost' => $invoicePaid->water_cost.'៛',
        //     'water_old' => $invoicePaid->water_old,
        //     'water_new' => $invoicePaid->water_new,
        //     'electric_trash_cost' => $invoicePaid->electric_trash_cost.'៛',
        //     'total_amount' => $invoicePaid->total_amount,
        // ];

        // $pdf = Pdf::loadView('invoice.print', $data);
        
        // Storage::put('public/invoices/'.date('F').'/'.$filename, $pdf->output());

        // $pd = $pdf->download($filename);

        $group_list = [
            'data1' => '-1001988992370',
            'data2' => '-1001647971881'
        ];

        foreach ($group_list as $key => $group_id) {
            Telegram::sendDocument([
                'chat_id' => $group_id,
                'document' => InputFile::create(Storage::path('public/invoices/'.date('F').'/'.$filename), $filename), 
                'filename' => $filename, 
                'thumb' => InputFile::create('https://cdn.shopify.com/app-store/listing_images/9cb39e0f9916c0168cad9e2ad5eda1e3/icon/574426c7aaf54c8113d0ca5e72ee4c47.png', Str::random(100) . '.' . 'png'),
                'caption' => __('app.invoice').' '.__('app.room_info').' '.$invoicePaid->room_id,
                'disable_notification' => FALSE, 
                'reply_to_message_id' => NULL,
                'reply_markup' => NULL, 
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true,
            ]);
        }

        return redirect('invoice-list')->with('mode', 'send');
    }

    public function printInvoice($id)
    {
        $invoicePaid = InvoicePaid::find($id);
        $room = Room::where('id',$invoicePaid->room_id)->first();

        $data = [
            'invoicePaid' => $invoicePaid,
            'room' => $room,
        ]; 

        return view('invoice.print_invoice', $data);
    }

    public function invoiceNumber()
    {
        $latest = InvoicePaid::latest()->first();
        if (!$latest) {
            return 'INV0001';
        }
        $string = preg_replace("/[^0-9\.]/", '', $latest->invoice_no);
        return 'INV' . sprintf('%04d', $string + 1);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeInvoice(Request $request)
    {
        $invoice_date = $request->day . '/' . $request->month . '/' . $request->year;

        $invoicePaid = new InvoicePaid();
        $invoicePaid->invoice_no = $this->invoiceNumber();
        $invoicePaid->room_id = $request->room_id;
        $invoicePaid->invoice_date = $invoice_date;
        $invoicePaid->room_cost = $request->cost;
        $invoicePaid->electric_cost = $request->electric_cost;
        $invoicePaid->electric_cost_status = 0;
        $invoicePaid->water_cost = $request->water_cost;
        $invoicePaid->water_cost_status = 0;
        $invoicePaid->water_old = $request->water_old;
        $invoicePaid->water_new = $request->water_new;
        $invoicePaid->electric_trash_cost = $request->trash_cost;
        $invoicePaid->electric_trash_cost_status = 0;
        $invoicePaid->total_amount = $request->total_amount;
        $invoicePaid->save();

        $invoicePaid = InvoicePaid::find($invoicePaid->id);
        $room = Room::where('id',$invoicePaid->room_id)->first();

        $filename = 'room_'.$invoicePaid->room_id."_invoices_".date('M').".pdf";
        
        $data = [
            'invoicePaid' => $invoicePaid,
            'room' => $room,
        ]; 
        Log::info('Start Load view pdf');
        $pdf = PDF::loadView("invoice.print", $data);
        Log::info('Finished Load view pdf');
        // Determine the storage path and filename
        $path = 'public/invoices/' . date('M');
        $storagePath = storage_path($path);
        $fullPath = $path . '/' . $filename;

        Log::info('Check if the directory exists; if not, create it');
        // Check if the directory exists; if not, create it
        if (!file_exists($storagePath)) {
            Storage::makeDirectory($path);
        }
        Log::info('Save the PDF to the storage disk');
        // Save the PDF to the storage disk
        Storage::put($fullPath, $pdf->output());

        Log::info('Generate a download response');
        // Generate a download response
        Storage::download($fullPath, $filename);
        Log::info('Finished generate a download response');
        // $pdf = Pdf::loadView("invoice.print", $data);
        // $pdf->download(storage_path('app/public/invoices/'.date('M').'/'.$filename));

        // 1
        // $pdf->save(storage_path('app/public/invoices/'.date('M').'/'.$filename));
        // $pdf->stream();

        // get path asset('storage/pdf/my_pdf_file.pdf')
        // end 1

        // 2
        // "app/public/invoices/".date('M')."/"
       // Storage::disk('invoices_storage')->put($filename, $pdf->output());
        // dd(storage_path('custom_disk'));
        // $pdf->save(storage_path(),$filename);
        
        //$pdf->download($filename);

        return redirect()->back()->with('mode', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoicePaid $invoicePaid)
    {
        //
    }

    public function statusInvoice(Request $request)
    {
        $invoicePaid = InvoicePaid::find($request->id);
        $variable = $request->status_name;
        switch ($variable) {
            case 'room':
                $invoicePaid->room_cost_status = $request->status ? 0 : 1;
                break;
            case 'electric':
                $invoicePaid->electric_cost_status = $request->status ? 0 : 1;
                break;
            case 'water':
                $invoicePaid->water_cost_status = $request->status ? 0 : 1;
                break;
            case 'trash':
                $invoicePaid->electric_trash_cost_status = $request->status ? 0 : 1;
                break;
            default:
                break;
        }

        $invoicePaid->save();
        return redirect('invoice-list')->with('mode', 'update');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editInvoice($id)
    {
        $rooms = Room::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $sysInfo = SystemInfo::first();
        $invoicePaid = InvoicePaid::find($id);
        return view('invoice.edit_invoice_eletrotic_water', compact('sysInfo', 'invoicePaid', 'rooms', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateInvoice(Request $request, $id)
    {
        $invoice_date = $request->day . '/' . $request->month . '/' . $request->year;

        $invoicePaid = InvoicePaid::find($id);
        $invoicePaid->invoice_no = $this->invoiceNumber();
        $invoicePaid->room_id = $request->room_id;
        $invoicePaid->invoice_date = $invoice_date;
        $invoicePaid->room_cost = $request->cost;
        $invoicePaid->electric_cost = $request->electric_cost;
        $invoicePaid->electric_cost_status = 0;
        $invoicePaid->water_cost = $request->water_cost;
        $invoicePaid->water_cost_status = 0;
        $invoicePaid->water_old = $request->water_old;
        $invoicePaid->water_new = $request->water_new;
        $invoicePaid->electric_trash_cost = $request->trash_cost;
        $invoicePaid->electric_trash_cost_status = 0;
        $invoicePaid->total_amount = $request->total_amount;
        $invoicePaid->save();

        return redirect('invoice-list')->with('mode', 'update');
    }

    public function deleteInvoice($id)
    {
        $invoicePaid = InvoicePaid::findOrFail($id);
        $invoicePaid->delete();
        return redirect()->back()->with('mode', 'delete');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $invoicePaid = InvoicePaid::findOrFail($id);
        $invoicePaid->delete();
        return redirect()->back()->with('mode', 'delete');
    }
}

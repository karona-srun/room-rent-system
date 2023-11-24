<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePaid;
use App\Models\Room;
use App\Models\RoomRent;
use App\Models\SystemInfo;
use App\Notifications\InvoicePaidNotification;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\File;
use Spatie\Browsershot\Browsershot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redirect;
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
        $end = $request->end_date == '' ? Carbon::parse(date('y-m-d'))->endOfMonth()->subDays(5) : Carbon::parse($request->end_date)->endOfDay(); // Sets the time to 23:59:59

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
        $invoices = $query->get();
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
        $roomRent = $invoicePaid->roomRent;
        $room = $roomRent->room;
        $customer = $roomRent->customer;

        $filename = "invoice_room_" . $invoicePaid->id . "_month_" . date('m') . ".jpg";
        
        $parts = explode('/', $invoicePaid->invoice_date);

        if ($invoicePaid->water_cost == '0.00') {
            $text = "---------------------------------------------\n"
                . '#' . $invoicePaid->invoice_no . '  🗓 ' . __('app.invoice') . ': ' . __('app.label_day') . ' ' . $parts[0] . ' ' . __('app.label_month') . ' ' . $parts[1] . ' ' . __('app.label_year') . ' ' . $parts[2]
                . "\n----------------------------------------------\n"
                . ' 🏘 ' . __('app.room') . ': ' . $room->room_number . "\n\n" ;// . __('app.room_cost') . ": $" . $invoicePaid->room_cost . ""
                // . ' មើលវិក័យប័ត្ររបស់អ្នក ->  [ចុចតំណរភ្ជាប់](https://roommore.online/mobile-invoice/'.$invoicePaid->id.')';
            // . "\n ⚡️ " . __('app.eletrotic_cost') . ": $" . $invoicePaid->electric_cost . ""
            // . "\n ♻️ " . __('app.label_eletrotic_cost_with_trash') . ": ៛" . $invoicePaid->electric_trash_cost . ""
            // . "\n-------------------------------------------------"
            // . "\n 📄 <b>" . __('app.label_total_amount') . ": " . $invoicePaid->total_amount . "</b>"
            // . "\n-------------------------------------------------"
            // . "\n" . __('app.label_invoice_info')
            // . "\n" . __('app.label_invoice_info_2');
        } else {
            $text = "---------------------------------------------\n"
                . '#' . $invoicePaid->invoice_no . '  🗓 ' . __('app.invoice') . ': ' . __('app.label_day') . ' ' . $parts[0] . ' ' . __('app.label_month') . ' ' . $parts[1] . ' ' . __('app.label_year') . ' ' . $parts[2]
                . "\n----------------------------------------------\n"
                . ' 🏘 ' . __('app.room') . ': ' . $room->room_number . "\n\n"; // . __('app.room_cost') . ": $" . $invoicePaid->room_cost . ""
                // . ' មើលវិក័យប័ត្ររបស់អ្នក ->  [ចុចតំណរភ្ជាប់](https://roommore.online/mobile-invoice/'.$invoicePaid->id.')';
            // . "\n ⚡️ " . __('app.eletrotic_cost') . ": $" . $invoicePaid->electric_cost . ""
            // . "\n 💧 " .  __('app.water_cost') . "  " . __('app.label_old_number') . " : " . $invoicePaid->water_old . "  " . __('app.label_new_number') . " : " . $invoicePaid->water_new . " : ៛" . $invoicePaid->water_cost . ""
            // . "\n ♻️ " . __('app.label_eletrotic_cost_with_trash') . ": ៛" . $invoicePaid->electric_trash_cost . ""
            // . "\n-------------------------------------------------"
            // . "\n 📄 <b>" . __('app.label_total_amount') . ": " . $invoicePaid->total_amount . "</b>"
            // . "\n-------------------------------------------------"
            // . "\n" . __('app.label_invoice_info')
            // . "\n" . __('app.label_invoice_info_2');
        }
        $telegram = Telegram::sendPhoto([
            'chat_id' => $customer->telegram_id,
            'photo' => InputFile::create(public_path($filename), $filename),
            'caption' => $text,
            'parse_mode' => 'html',
            'text' => $text,
        ]);
        
        // $telegram = Telegram::sendMessage([
        //     'chat_id' => $customer->telegram_id, 
        //     'parse_mode' => 'markdown',
        //     'text' =>  $text
        // ]);

        // Log::info('Sent .' . $telegram);

        return redirect('invoice-list')->with('mode', 'send');
    }

    public function sendAll(Request $request)
    {
        if (!$request->checkOne) {
            return Redirect::back();
        }

        foreach ($request->checkOne as $id) {
            $invoicePaid = InvoicePaid::with('roomRent.room.customer')->find($id);

            // // You can access the related data as follows:
            $roomRent = $invoicePaid->roomRent;
            $room = $roomRent->room;
            $customer = $roomRent->customer;

            $filename = "invoice_room_" . $invoicePaid->id . "_month_" . date('m') . ".jpg";
        
            $parts = explode('/', $invoicePaid->invoice_date);

            if ($invoicePaid->water_cost == '0.00') {
                $text = "---------------------------------------------\n"
                . '#' . $invoicePaid->invoice_no . '  🗓 ' . __('app.invoice') . ': ' . __('app.label_day') . ' ' . $parts[0] . ' ' . __('app.label_month') . ' ' . $parts[1] . ' ' . __('app.label_year') . ' ' . $parts[2]
                . "\n----------------------------------------------\n"
                . ' 🏘 ' . __('app.room') . ': ' . $room->room_number . "\n\n"; // . __('app.room_cost') . ": $" . $invoicePaid->room_cost . ""
                // . ' មើលវិក័យប័ត្ររបស់អ្នក ->  [ចុចតំណរភ្ជាប់](https://roommore.online/mobile-invoice/'.$invoicePaid->id.')';// . __('app.room_cost') . ": $" . $invoicePaid->room_cost . ""
                // . "\n ⚡️ " . __('app.eletrotic_cost') . ": $" . $invoicePaid->electric_cost . ""
                // . "\n ♻️ " . __('app.label_eletrotic_cost_with_trash') . ": ៛" . $invoicePaid->electric_trash_cost . ""
                // . "\n-------------------------------------------------"
                // . "\n 📄 <b>" . __('app.label_total_amount') . ": " . $invoicePaid->total_amount . "</b>"
                // . "\n-------------------------------------------------"
                // . "\n" . __('app.label_invoice_info')
                // . "\n" . __('app.label_invoice_info_2');
            } else {
                $text = "---------------------------------------------\n"
                . '#' . $invoicePaid->invoice_no . '  🗓 ' . __('app.invoice') . ': ' . __('app.label_day') . ' ' . $parts[0] . ' ' . __('app.label_month') . ' ' . $parts[1] . ' ' . __('app.label_year') . ' ' . $parts[2]
                . "\n----------------------------------------------\n"
                . ' 🏘 ' . __('app.room') . ': ' . $room->room_number . "\n\n"; // . __('app.room_cost') . ": $" . $invoicePaid->room_cost . ""
                // . ' មើលវិក័យប័ត្ររបស់អ្នក ->  [ចុចតំណរភ្ជាប់](https://roommore.online/mobile-invoice/'.$invoicePaid->id.')'; //. __('app.room_cost') . ": $" . $invoicePaid->room_cost . ""
                // . "\n ⚡️ " . __('app.eletrotic_cost') . ": $" . $invoicePaid->electric_cost . ""
                // . "\n 💧 " .  __('app.water_cost') . "  " . __('app.label_old_number') . " : " . $invoicePaid->water_old . "  " . __('app.label_new_number') . " : " . $invoicePaid->water_new . " : ៛" . $invoicePaid->water_cost . ""
                // . "\n ♻️ " . __('app.label_eletrotic_cost_with_trash') . ": ៛" . $invoicePaid->electric_trash_cost . ""
                // . "\n-------------------------------------------------"
                // . "\n 📄 <b>" . __('app.label_total_amount') . ": " . $invoicePaid->total_amount . "</b>"
                // . "\n-------------------------------------------------"
                // . "\n" . __('app.label_invoice_info')
                // . "\n" . __('app.label_invoice_info_2');
            }
            $telegram = Telegram::sendPhoto([
                'chat_id' => $customer->telegram_id,
                'photo' => InputFile::create(public_path($filename), $filename),
                'caption' => $text,
                'parse_mode' => 'html',
                'text' => $text,
            ]);

            // $telegram = Telegram::sendMessage([
            //     'chat_id' => $customer->telegram_id, 
            //     'parse_mode' => 'markdown',
            //     'text' =>  $text
            // ]);
            
            // Log::info('Sent .' . $telegram);
        }

        return redirect('invoice-list')->with('mode', 'send');
    }

    public function reviewPrintInvoice($id)
    {
        $invoicePaid = InvoicePaid::find($id);
        $room = Room::where('id', $invoicePaid->room_id)->first();

        // $date = explode('/', $invoicePaid->invoice_date);
        // $data = [
        //     'invoicePaid' => $invoicePaid,
        //     'day' => $date[0],
        //     'month' => $date[1],
        //     'year' => $date[2],
        //     'room' => $room,
        // ];

        $filename = "invoice_room_" . $invoicePaid->id . "_month_" . date('m') . ".jpg";

        // Browsershot::url(env('APP_URL').'/my-invoice/'.$invoicePaid->id)
        //     ->setOption('landscape', true)
        //     ->format('A5')
        //     ->waitUntilNetworkIdle()
        //     ->save($filename);
    }

    public function printInvoice($id)
    {
        $invoicePaid = InvoicePaid::find($id);
        $room = Room::where('id', $invoicePaid->room_id)->first();

        $data = [
            'invoicePaid' => $invoicePaid,
            'room' => $room,
        ];

        return view('invoice.print_invoice', $data);
    }

    public function myInvoice($id)
    {
        $invoicePaid = InvoicePaid::find($id);
        $room = Room::where('id', $invoicePaid->room_id)->first();

        $data = [
            'invoicePaid' => $invoicePaid,
            'room' => $room,
        ];

        return view('invoice.myview', $data);
    }

    public function mobileInvoice($id)
    {
        $invoicePaid = InvoicePaid::find($id);
        $room = Room::where('id', $invoicePaid->room_id)->first();

        $data = [
            'invoicePaid' => $invoicePaid,
            'room' => $room,
        ];

        return view('invoice.mobile_invoice', $data);
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
        $invoicePaid->total_amount_dollar = $request->total_amount_dollar;
        $invoicePaid->other = $request->other;
        $invoicePaid->save();

        //$this->reviewPrintInvoice($invoicePaid->id);

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
        $invoicePaid->total_amount_dollar = $request->total_amount_dollar;
        $invoicePaid->other = $request->other;
        $invoicePaid->save();

        //$this->reviewPrintInvoice($invoicePaid->id);

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

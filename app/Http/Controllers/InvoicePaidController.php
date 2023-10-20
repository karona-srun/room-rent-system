<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePaid;
use App\Models\Room;
use App\Models\SystemInfo;
use App\Notifications\InvoicePaidNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
        return redirect('/bot/send');
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

        return redirect()->back()->with('mode', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoicePaid $invoicePaid)
    {
        //
    }

    public function printInvoice($id)
    {
        $invoicePaid = InvoicePaid::find($id);
        $sysInfo = SystemInfo::first();
        $rooms = Room::orderBy('name')->get();
        return view('invoice.print_invoice', compact('invoicePaid', 'rooms', 'sysInfo'));
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

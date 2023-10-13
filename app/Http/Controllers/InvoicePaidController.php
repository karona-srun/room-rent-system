<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePaid;
use App\Models\Room;
use App\Models\SystemInfo;
use App\Notifications\InvoicePaidNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class InvoicePaidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoice.invoice_list');
        return Notification::send(new InvoicePaidNotification());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function invoiceEletroticWater()
    {
        $rooms = Room::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $sysInfo = SystemInfo::first();
        return view('invoice.create_invoice_eletrotic_water', compact('sysInfo','rooms','customers'));
    }

    public function SendbyOne(Request $request)
    {

    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeInvoiceAll(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoicePaid $invoicePaid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvoicePaid $invoicePaid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InvoicePaid $invoicePaid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoicePaid $invoicePaid)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderBy('name')->whereIn('status',[0,1])->paginate(10);
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->status = $request->status ?? 0;
        $customer->address = $request->address;
        $customer->description = $request->description;
        $customer->save();

        if($request->save_and_create_new == 1){
            return redirect('customers/create')->with('mode', 'success');
        }

        return redirect('customers')->with('mode', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->status = $request->status;
        $customer->address = $request->address;
        $customer->description = $request->description;
        $customer->save();

        return redirect('customers')->with('mode', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->status = 3;
        $customer->save();
        return redirect()->back()->with('mode', 'delete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);
        $customer->status = 3;
        $customer->save();
        return redirect()->back()->with('mode', 'update');
    }
}

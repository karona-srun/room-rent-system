<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $customers = Customer::orderBy('name')
            ->where(function ($query) use ($keyword) {
                $query->where('status', '0')
                    ->orWhere('status', '1');
            })
            ->where(function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('phone', 'like', '%' . $keyword . '%');
            })
            ->paginate(10);

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

        if ($request->file('photo_front')) {
            $file = $request->file('photo_front');
            $filename = $request->phone . '_' . date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('images/card_id/'), $filename);
            $customer->photo_front = 'images/card_id/' . $filename;
        }

        if ($request->file('photo_back')) {
            $file = $request->file('photo_back');
            $filename =  $request->phone . '_' . date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('images/card_id'), $filename);
            $customer->photo_back = 'images/card_id/' . $filename;
        }

        $customer->save();

        if ($request->save_and_create_new == 1) {
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

    public function addTelegramID(Request $request)
    {
        $customer = Customer::findOrFail($request->id);
        $customer->telegram_id = $request->telegram_id;
        $customer->save();

        return redirect('customers')->with('mode', 'update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);

        if ($request->file('photo_front')) {
            $file = $request->file('photo_front');
            $filename = $request->phone . '_' . date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('images/card_id/'), $filename);
            $customer->photo_front = 'images/card_id/' . $filename;
        }

        if ($request->file('photo_back')) {
            $file = $request->file('photo_back');
            $filename = $request->phone . '_' . date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('images/card_id'), $filename);
            $customer->photo_back = 'images/card_id/' . $filename;
        }

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

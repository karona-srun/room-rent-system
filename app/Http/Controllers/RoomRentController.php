<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomRent;
use Illuminate\Http\Request;

class RoomRentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomRent = RoomRent::orderBy('room_id')->whereIn('status',[0,1])->paginate(10);
        return view('room_rent.index', compact('roomRent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomRent = RoomRent::pluck('room_id');
        $rooms = Room::orderBy('name')->whereNotIn('id', $roomRent)->get();
        $customers = Customer::orderBy('name')->where('status', 0)->get();
        return view('room_rent.create', compact('rooms','customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = new RoomRent();
        $room->room_id = $request->room_id;
        $room->customer_id = $request->customer_id;
        $room->status = $request->status ?? 0;
        $room->description = $request->description;
        $room->save();

        return redirect('room-rents')->with('mode', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomRent $roomRent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomRent $roomRent)
    {
        $roomRent = RoomRent::find($roomRent->id);
        $roomRentID = RoomRent::pluck('room_id');
        $rooms = Room::orderBy('name')->whereNotIn('id', $roomRentID)->where('status', 0)->get();
        $customers = Customer::orderBy('name')->where('status', 0)->get();

        return view('room_rent.edit', compact('roomRent','rooms','customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomRent $roomRent)
    {
        $room = RoomRent::find($roomRent->id);
        $room->room_id = $request->room_id;
        $room->customer_id = $request->customer_id;
        $room->status = $request->status ?? 0;
        $room->description = $request->description;
        $room->save();

        return redirect('room-rents')->with('mode', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomRent $roomRent)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomRent;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomRentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $phone = $request->phone;
        $keyword = $request->keyword;
        $roomRent = DB::table('room_rents')
            ->join('rooms', 'rooms.id', '=', 'room_rents.room_id')
            ->join('customers', 'customers.id', '=', 'room_rents.customer_id')
            ->select('*','room_rents.id as room_rent_id', 'customers.name as customer_name', 'customers.phone as customer_phone', 'rooms.name as room_name', 'rooms.room_number as room_number')
            ->where(function ($query) use ($keyword, $phone) {
                $query->where('rooms.room_number', 'like', "%{$keyword}%")
                    ->orWhere('rooms.name', 'like', "%{$keyword}%");
            })
            ->get();
        
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
        return view('room_rent.create', compact('rooms', 'customers'));
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

        return view('room_rent.edit', compact('roomRent', 'rooms', 'customers'));
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

    public function destroyRoomRent($id)
    {
        $room = RoomRent::find($id);
        $room->delete();
        return redirect()->back()->with('mode', 'delete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomRent $roomRent)
    {
        //
    }
}

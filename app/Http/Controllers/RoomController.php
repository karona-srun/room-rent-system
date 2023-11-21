<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $rooms = Room::orderBy("name")
            ->where(function ($query) use ($keyword) {
                $query->where('status', '0')
                    ->orWhere('status', '1');
            })
            ->where(function ($query) use ($keyword) {
                $query->where('room_number', 'like', '%' . $keyword . '%')
                    ->orWhere('name', 'like', '%' . $keyword . '%');
            })
            ->paginate(10);

        return view('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = new Room();
        $room->name = $request->name;
        $room->room_number = $request->room_number;
        $room->status = $request->status ?? 0;
        $room->cost = $request->cost;
        $room->description = $request->description;
        $room->save();

        if($request->save_and_create_new == 1){
            return redirect('rooms/create')->with('mode', 'success');
        }

        return redirect('rooms')->with('mode', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $room = Room::findOrFail($room->id);
        return view('room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $room = Room::findOrFail($room->id);
        $room->name = $request->name;
        $room->room_number = $request->room_number;
        $room->status = $request->status ?? 0;
        $room->cost = $request->cost;
        $room->description = $request->description;
        $room->save();

        return redirect('rooms')->with('mode', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyRoom($id)
    {
        $room = Room::findOrFail($id);
        $room->status = 3;
        $room->save();
        return redirect()->back()->with('mode', 'delete');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}

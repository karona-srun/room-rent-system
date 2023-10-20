<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePaid;
use App\Models\Room;
use App\Models\RoomRent;
use App\Models\SystemInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sysInfo = SystemInfo::first();
        $room = Room::count();
        $customer = Customer::count();
        $roomRent = RoomRent::count();
        $electricCost = InvoicePaid::whereMonth('created_at', '=', date('m'))->sum('electric_cost');
        $roomCost = InvoicePaid::whereMonth('created_at', '=', date('m'))->sum('room_cost'); 
        $waterCost = InvoicePaid::whereMonth('created_at', '=', date('m'))->sum('water_cost'); 
        $trashCost = InvoicePaid::whereMonth('created_at', '=', date('m'))->sum('electric_trash_cost'); 
        
        $coverRD = $waterCost + $trashCost;
        $coverDR = ($electricCost + $roomCost) * $sysInfo->exchange_riel;

        $totalRiel = $coverRD + $coverDR;
        $totalDollar = $totalRiel / $sysInfo->exchange_riel;

        $data = [
            'room' => $room,
            'customer' => $customer,
            'roomRent' => $roomRent,
            'roomCost' => $roomCost,
            'electricCost' => $electricCost,
            'waterCost' => $waterCost,
            'trashCost' => $trashCost,
            'totalDollar' => number_format($totalDollar, 2),
            'totalRiel' => $totalRiel
        ];
        
        return view('dashboards', compact('data'));
    }
}

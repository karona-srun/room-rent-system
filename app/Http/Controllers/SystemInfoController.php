<?php

namespace App\Http\Controllers;

use App\Models\SystemInfo;
use Illuminate\Http\Request;

class SystemInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $system = SystemInfo::first();
        return view('system_info.index', compact('system'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemInfo $systemInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemInfo $systemInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SystemInfo $systemInfo)
    {
        $system = SystemInfo::find($systemInfo->id);
        $system->web_app = $request->web_app;
        $system->exchange_riel = $request->exchange_riel;
        $system->water_cost = $request->water_cost;
        $system->trash_cost = $request->trash_cost;
        $system->description = $request->description;
        $system->save();
        
        return redirect('system-infos')->with('mode', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemInfo $systemInfo)
    {
        //
    }
}

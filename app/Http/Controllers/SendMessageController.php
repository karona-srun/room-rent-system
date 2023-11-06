<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomRent;
use App\Models\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
    {
        $sendMessage = SendMessage::orderBy('room_id')->Where('msg','like', '%'. $request->keyword . '%')->paginate(10);
        return view('send_message.index', compact('sendMessage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::orderBy('name')->where(function ($query) {
            $query->where('status', '0')
                ->orWhere('status', '1');
        })->get();
        return view('send_message.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roomRent = RoomRent::where('room_id', $request->room_id)->first();
        $customer = Customer::find($roomRent->customer_id);

        $send = new SendMessage();
        $send->room_id = $request->room_id;
        $send->customer_id = $customer->id;
        $send->msg = $request->msg;
        $send->save();
        
        return redirect('send-message')->with('mode', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(SendMessage $sendMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = SendMessage::find($id);
        $rooms = Room::orderBy('name')->where(function ($query) {
            $query->where('status', '0')
                ->orWhere('status', '1');
        })->get();
        return view('send_message.edit', compact('item','rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $roomRent = RoomRent::where('room_id', $request->room_id)->first();
        $customer = Customer::find($roomRent->customer_id);

        $send = SendMessage::find($request->id);
        $send->room_id = $request->room_id;
        $send->customer_id = $customer->id;
        $send->msg = $request->msg;
        $send->save();
        
        return redirect('send-message')->with('mode', 'update');
    }

    public function sendMessageByOne($id)
    {
        $item = SendMessage::find($id);
        $customer = Customer::find($item->customer_id);

        $telegram = Telegram::sendMessage([
            'chat_id' => $customer->telegram_id, 
            'parse_mode' => 'HTML',
            'text' => $item->msg,
        ]);
        
        Log::info('Sent .' . $telegram);

        return redirect('send-message')->with('mode', 'send');
    }

    public function sendMessageAll(Request $request)
    {
        if(!$request->checkOne) {
            return Redirect::back();
        }

        foreach ($request->checkOne as $id) {
            $item = SendMessage::find($id);
            $customer = Customer::find($item->customer_id);

            $telegram = Telegram::sendMessage([
                'chat_id' => $customer->telegram_id, 
                'parse_mode' => 'HTML',
                'text' => $item->msg,
            ]);

            Log::info('Sent .' . $telegram);
        }

        return redirect('send-message')->with('mode', 'send');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteMessage($id)
    {
        $item = SendMessage::find($id);
        $item->delete();

        return redirect('send-message')->with('mode', 'update');
    }
}

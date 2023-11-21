<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomRent;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {

        $listGroup = [];
        $groups = Telegram::getUpdates();

        $customers = Customer::orderBy('name')
            ->where(function ($query) {
                $query->where('status', '0')
                    ->orWhere('status', '1');
            })->get('telegram_id')->toArray();

        for ($i = 0; $i < count($groups); $i++) {
            if ($groups[$i]->my_chat_member != "") {
                $listGroup[$i] = $groups[$i]->my_chat_member->chat;
            }
        }
        $room = RoomRent::get();

        // dd($customers);

        return view('console', compact('listGroup', 'customers', 'room'));
    }

    public function telegram($telegram)
    {
        $data = [];
        $datas = Telegram::getUpdates();
        for ($i = 0; $i < count($datas); $i++) {
            if ($datas[$i]->my_chat_member != "") {
                $data[$i] = $datas[$i]->my_chat_member->chat;
            }
        }

        $room = RoomRent::get();

        $customers = Customer::orderBy('name')
        ->where(function ($query) {
            $query->where('status', '0')
                ->orWhere('status', '1');
        })->get();

        return view('con_telegram', compact('telegram','data', 'customers', 'room'));
    }

    public function connectTelegram(Request $request)
    {
        $customers = Customer::find($request->customer);
        $customers->telegram_id = $request->telegram;
        $customers->save();
        return redirect('bot/getupdates');
    }

    public function getMe()
    {
        $response = Telegram::getMe();

        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();
        echo $botId . '<br />';
        echo $firstName . '<br />';
        echo $username . '<br />';
    }


    public function storeMessage()
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'message' => 'required'
        // ]);
        // start
        // $email = 'karona@gmail.com';
        // $message = 'អរគុណ!';

        // $text = __('app.invoice') . "\n\nសូមស្វាគមន៍ទាំងអស់គ្នា ខ្ញុំគីជាមនុស្សយន្តខ្ញុំមានសមត្ថភាពផ្ញើសារទៅកាន់អ្នកបាន!\n"
        //     . "<b>អ៊ីម៉ែលរបស់ខ្ញុំ: </b>"
        //     . "$email\n"
        //     . "<b>សារ: </b>"
        //     . $message;

        // $data = [
        //     'data1' => '-1001988992370',
        //     'data2' => '-1001647971881',
        // ];

        // foreach ($data as $key => $group_id) {
        //     $telegram = Telegram::sendMessage([
        //         'chat_id' => $group_id, 
        //         'parse_mode' => 'HTML',
        //         'text' => $text,
        //     ]);
        //     Log::info('Sent .'.$telegram);
        // }
        // end start


        $phoneNumber = '+85586773007'; // Replace with the user's phone number with country code
        $message = 'Hello, this is a message from Laravel!';
        $me = Telegram::getMe();
        $update = Telegram::getUpdates();
        $chatId = $update[0]['message']['chat']['id'];

        // $chatId = Telegram::getChatIdFromPhoneNumber($phoneNumber);
        if ($chatId) {
            $telegram = Telegram::getMe();
            // Telegram::bot('mybot')->sendMessage([
            //     'chat_id' => $chatId,
            //     'text' => $message,
            // ]);
            dd($telegram);
        } else {
            $this->error('User not found or phone number is incorrect.');
        }

        return redirect('dashboard')->with('mode', 'success');
    }

    public function storePhoto(Request $request)
    {
        $request->validate([
            'file' => 'file|mimes:jpeg,png,gif'
        ]);

        $photo = $request->file('file');

        // $telegram = new Api('6520524849:AAFqnLEoILiOCEfNK6U1ZXXMJXnQRhjzowI');
        // $response = $telegram->getMe();

        // $response = $telegram->sendDocument([
        //     'chat_id' => '401829074',
        //     'document' => InputFile::create('https://www.africau.edu/images/default/sample.pdf', Str::random(100) . '.' . 'pdf'),
        //     'caption' => '🧑🏻‍💻🫰🏼🤟🏼Some caption',
        //     'parse_mode' => 'html',
        //     'thumbnail' => InputFile::create('https://simplified.com/siteimages/ai/ai-avatar-creative.png', Str::random(100) . '.' . 'png')
        // ]);

        // $messageId = $response->getMessageId();

        $data = [
            'data1' => '-1001988992370',
            'data2' => '-1001647971881'
        ];

        foreach ($data as $key => $group_id) {
            Telegram::sendDocument([
                'chat_id' => $group_id,
                'document' => InputFile::create('https://pdfobject.com/pdf/sample.pdf', Str::random(100) . '.' . 'pdf'),
                'caption' => '🧑🏻‍💻 I am Caption Bot :-]',
                'parse_mode' => 'HTML',
                'thdeumbnail' => InputFile::create('https://cdn.shopify.com/app-store/listing_images/9cb39e0f9916c0168cad9e2ad5eda1e3/icon/574426c7aaf54c8113d0ca5e72ee4c47.png', Str::random(100) . '.' . 'png')
            ]);
        }

        return redirect('dashboard')->with('mode', 'success');
    }

    public function sendByPhoneNumber(Request $request)
    {
        try {
            $client = new Client([
                "base_uri" => "https://api.telegram.org",
            ]);

            $bot_token = "6520524849:AAFqnLEoILiOCEfNK6U1ZXXMJXnQRhjzowI";
            $chat_id = "+85586773007"; //replace with yours
            $message = "How are you? I am Laravel.";
            $response = $client->request("GET", "/bot$bot_token/sendMessage", [
                "query" => [
                    "chat_id" => $chat_id,
                    "text" => $message
                ]
            ]);

            $body = $response->getBody();
            $arr_body = json_decode($body);
            if ($arr_body->ok) {
                echo "Message posted.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return response()->json(['message' => $message]);
    }

    public function sendByUserAll(Request $request)
    {
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Str;
use Telegram\Bot\Api;
use Telegram\Bot\Objects\PhotoSize;
use Telegram\Bot\TelegramClient;
use Telegram\Bot\TelegramRequest;

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $telegram = Telegram::getUpdates();
        return (json_encode($telegram));
    }

    public function storeMessage()
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'message' => 'required'
        // ]);
        $email = 'karona@gmail.com';
        $message = 'អរគុណ!';

        $text = __('app.invoice') . "\n\nសូមស្វាគមន៍ទាំងអស់គ្នា ខ្ញុំគីជាមនុស្សយន្តខ្ញុំមានសមត្ថភាពផ្ញើសារទៅកាន់អ្នកបាន!\n"
            . "<b>អ៊ីម៉ែលរបស់ខ្ញុំ: </b>"
            . "$email\n"
            . "<b>សារ: </b>"
            . $message;

        $data = [
            'data1' => '-1001988992370',
            'data2' => '-1001647971881',
        ];
        
        foreach ($data as $key => $group_id) {
            $telegram = Telegram::sendMessage([
                'chat_id' => $group_id, 
                'parse_mode' => 'HTML',
                'text' => $text
            ]);
            Log::info('Sent .'.$telegram);
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
                'document' => InputFile::create('https://www.africau.edu/images/default/sample.pdf', Str::random(100) . '.' . 'pdf'),
                'caption' => '🧑🏻‍💻 I am Caption Bot :-]',
                'parse_mode' => 'HTML',
                'thumbnail' => InputFile::create('https://simplified.com/siteimages/ai/ai-avatar-creative.png', Str::random(100) . '.' . 'png')
            ]);
        }

        return redirect('dashboard')->with('mode', 'success');
    }
}

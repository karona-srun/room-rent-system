<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Base64DatatoImageController extends Controller
{
    public function base64ToImage(Request $request)
    {
        Log::info($request->base64data);
        $image = $request->base64data;  
        $location = "invoices/";
        $image_parts = explode(";base64,", $image);
        $image_base64 = base64_decode($image_parts[1]);
        $filename = "invoice_room_" . $request->id . "_month_" . date('m') . ".jpg";
        $file = $location . $filename;
        Storage::disk('public')->put($file,$image_base64);

        return redirect('/invoice-list')->with('mode', 'success');
    }
}

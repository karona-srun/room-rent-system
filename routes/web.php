<?php

use JonnyW\PhantomJs\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    redirect('/login');
    return view('auth.login');
});

Route::get('/', function () {
    // $url = "https://devdojo.com/episode/website-screenshots-with-laravel";

   
    // $client = Client::getInstance();
    
    // $width  = 800;
    // $height = 600;
    // $top    = 0;
    // $left   = 0;
    
    // /** 
    //  * @see JonnyW\PhantomJs\Http\CaptureRequest
    //  **/
    // $request = $client->getMessageFactory()->createCaptureRequest('http://jonnyw.me', 'GET');
    // $request->setOutputFile('capture_file.jpg');
    // $request->setViewportSize($width, $height);
    // $request->setCaptureDimensions($width, $height, $top, $left);

    // /** 
    //  * @see JonnyW\PhantomJs\Http\Response 
    //  **/
    // $response = $client->getMessageFactory()->createResponse();

    // // Send the request
    // $client->send($request, $response);
    $client = Client::getInstance();

    // Define the path to the PhantomJS executable
    // $client->setPath(base_path('vendor/jakoch/phantomjs/bin/phantomjs'));

    // Tells the client to wait for all resources before rendering
    $client->isLazy();

    // set the width, height, x and y axis for your screen capture:
    $width = 1280;
    $height = 640;
    $top = 0;
    $left = 0;

    // Set the url to the page we want to capture
    $route = url("route/" . $this->route->id . "/preview");

    // Set the path for the image we want to save
    $file = base_path('public/images/routes/' . $this->route->id . '.jpeg');

    $request = $client->getMessageFactory()->createCaptureRequest($route, 'GET');
    $request->setOutputFile($file);
    $request->setViewportSize($width, $height);
    $request->setCaptureDimensions($width, $height, $top, $left);

    // Set the quality of the screenshot to 100%
    $request->setQuality(100);

    // Set the format of the image
    $request->setFormat('jpeg');

    // Set a timeout to exit after 20 seconds in case something wrong happens
    $request->setTimeout(20000);
    
    $response = $client->getMessageFactory()->createResponse();

    $client->send($request, $response);
});

Route::get('/my-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'myInvoice']);

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('connect-telegram/{telegram}', [App\Http\Controllers\TelegramBotController::class, 'telegram']);
    Route::post('connect-telegram', [App\Http\Controllers\TelegramBotController::class, 'connectTelegram']);
    Route::get('/bot/getupdates', [App\Http\Controllers\TelegramBotController::class, 'updatedActivity']);
    Route::get('/bot/getMe', [App\Http\Controllers\TelegramBotController::class, 'getMe']);
    Route::get('/bot/send', [App\Http\Controllers\TelegramBotController::class, 'storeMessage']);
    Route::get('/bot/send-photo', [App\Http\Controllers\TelegramBotController::class, 'storePhoto']);
    Route::get('/bot/send3', [App\Http\Controllers\TelegramBotController::class, 'sendByPhoneNumber']);
    
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/customers', App\Http\Controllers\CustomerController::class);
    Route::get('/customers-destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroyCustomer']);
    Route::post('add-telegram-id', [App\Http\Controllers\CustomerController::class, 'addTelegramID']);
    
    Route::resource('/rooms', App\Http\Controllers\RoomController::class);
    Route::get('/rooms-destroy/{id}', [App\Http\Controllers\RoomController::class, 'destroyRoom']);
    Route::resource('/room-rents', App\Http\Controllers\RoomRentController::class);
    Route::get('/rooms-rents-destroy/{id}', [App\Http\Controllers\RoomRentController::class, 'destroyRoomRent']);

    Route::get('send-message', [App\Http\Controllers\SendMessageController::class, 'index']);
    Route::get('create-message', [App\Http\Controllers\SendMessageController::class, 'create']);
    Route::post('send-message', [App\Http\Controllers\SendMessageController::class, 'store']);
    Route::get('send-message/{id}', [App\Http\Controllers\SendMessageController::class, 'edit']);
    Route::post('update-message', [App\Http\Controllers\SendMessageController::class, 'update']);
    Route::get('delete-message/{id}', [App\Http\Controllers\SendMessageController::class, 'deleteMessage']);
    Route::get('send-message-by-one/{id}', [App\Http\Controllers\SendMessageController::class, 'sendMessageByOne']);
    Route::post('send-message-all', [App\Http\Controllers\SendMessageController::class, 'sendMessageAll']);

    Route::get('/invoice-list',  [App\Http\Controllers\InvoicePaidController::class, 'index']);
    Route::get('/invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'editInvoice']);
    Route::post('/update-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'updateInvoice']);
    Route::get('/create-invoice-eletrotic-water',  [App\Http\Controllers\InvoicePaidController::class, 'invoiceEletroticWater']);
    Route::post('store-invoice',  [App\Http\Controllers\InvoicePaidController::class, 'storeInvoice']);
    Route::get('/print-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'printInvoice']);
    
    Route::get('/review-print-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'reviewPrintInvoice']);
    Route::post('/status-invoice',  [App\Http\Controllers\InvoicePaidController::class, 'statusInvoice']);
    Route::get('/delete-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'deleteInvoice']);
    Route::get('/send-by-one/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'sendByOne']);
    Route::post('/send-all',  [App\Http\Controllers\InvoicePaidController::class, 'sendAll']);
    
    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::get('/change-password/{id}',  [App\Http\Controllers\UserController::class, 'changePassword']);
    Route::post('/change-password',  [App\Http\Controllers\UserController::class, 'updatePassword']);
    Route::resource('/system-infos', App\Http\Controllers\SystemInfoController::class);
});


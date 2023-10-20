<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use NotificationChannels\Telegram\Telegram;

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
    return view('welcome');
});

	
Route::get('/bot/getupdates', [App\Http\Controllers\TelegramBotController::class, 'updatedActivity']);
Route::get('/bot/send', [App\Http\Controllers\TelegramBotController::class, 'storeMessage']);
Route::get('/bot/send-photo', [App\Http\Controllers\TelegramBotController::class, 'storePhoto']);

Auth::routes();
Route::group(['middleware' => 'auth'], function ($router) {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/customers', App\Http\Controllers\CustomerController::class);
    Route::get('/customers-destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroyCustomer']);
    Route::resource('/rooms', App\Http\Controllers\RoomController::class);
    Route::get('/rooms-destroy/{id}', [App\Http\Controllers\RoomController::class, 'destroyRoom']);
    Route::resource('/room-rents', App\Http\Controllers\RoomRentController::class);
    Route::get('/rooms-rents-destroy/{id}', [App\Http\Controllers\RoomRentController::class, 'destroyRoomRent']);

    Route::get('/invoice-list',  [App\Http\Controllers\InvoicePaidController::class, 'index']);
    Route::get('/invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'editInvoice']);
    Route::post('/update-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'updateInvoice']);
    Route::get('/create-invoice-eletrotic-water',  [App\Http\Controllers\InvoicePaidController::class, 'invoiceEletroticWater']);
    Route::post('store-invoice',  [App\Http\Controllers\InvoicePaidController::class, 'storeInvoice']);
    Route::get('/print-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'printInvoice']);
    Route::post('/status-invoice',  [App\Http\Controllers\InvoicePaidController::class, 'statusInvoice']);
    Route::get('/delete-invoice/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'deleteInvoice']);
    Route::get('/send-by-one/{id}',  [App\Http\Controllers\InvoicePaidController::class, 'sendByOne']);
    
    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::get('/change-password/{id}',  [App\Http\Controllers\UserController::class, 'changePassword']);
    Route::post('/change-password',  [App\Http\Controllers\UserController::class, 'updatePassword']);
    Route::resource('/system-infos', App\Http\Controllers\SystemInfoController::class);
});

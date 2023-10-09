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

Auth::routes();
Route::group(['middleware' => 'auth'], function ($router) {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/customers', App\Http\Controllers\CustomerController::class);
    Route::get('/customers-destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroyCustomer']);
    Route::resource('/rooms', App\Http\Controllers\RoomController::class);
    Route::get('/rooms-destroy/{id}', [App\Http\Controllers\RoomController::class, 'destroyRoom']);
    Route::resource('/room-rents', App\Http\Controllers\RoomRentController::class);

    Route::get('/invoice-list',  [App\Http\Controllers\InvoicePaidController::class, 'index']);
    Route::get('/create-invoice-eletrotic-water',  [App\Http\Controllers\InvoicePaidController::class, 'invoiceEletroticWater']);
    Route::get('/create-invoice-only-eletrotic',  [App\Http\Controllers\InvoicePaidController::class, 'invoiceOnlyEletrotic']);
    Route::post('/store-invoice-all',  [App\Http\Controllers\InvoicePaidController::class, 'storeInvoiceAll']);

    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::resource('/system-infos', App\Http\Controllers\SystemInfoController::class);
});

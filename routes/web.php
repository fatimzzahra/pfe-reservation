<?php

use App\Http\Controllers\DestinationPageController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;

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

Route::get('/', [HomeController::class, 'index'])->name('acceuil');
Route::get('/destination', [DestinationPageController::class, 'index'])->name('destination.index');
Route::get('/autocomplete-destination', [DestinationPageController::class, 'autocomplete'])->name('autocomplete.destination');
Route::get('/hotel/{id}', [HotelController::class, 'show'])->name('hotel.show');
Route::get('/hotel/{id}/rooms', [RoomController::class, 'index'])->name('hotel.rooms');
// Route::view('/hotel', 'hotel')->name('hotel');
Route::get('/destinations/search', [DestinationPageController::class, 'search'])->name('destinations.search');
Route::view('/hotel', 'hotel')->name('hotel');
Route::view('/offer', 'offer')->name('offer'); 

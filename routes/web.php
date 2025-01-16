<?php

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

Route::get('/', [RoomController::class, 'index'])->name('room.accueil');
Route::get('/A-Propos', [RoomController::class, 'about'])->name('room.about');
Route::get('/services', [RoomController::class, 'service'])->name('room.service');
Route::get('/contact', [RoomController::class, 'contact'])->name('room.contact');


<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

// Public routes
Route::view('/', 'index')->name('index');
Route::view('/aboutus', 'aboutus')->name('aboutus');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::view('/news', 'news')->name('news');
    Route::view('/events', 'events')->name('events');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
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

// Public routes
Route::view('/', 'index')->name('index');
Route::view('/aboutus', 'aboutus')->name('aboutus');

Route::resource('events', EventController::class);
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::post('/events/register', [EventController::class, 'register'])->name('event.index.register');

Route::get('/admininterface', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/news', [HomeController::class, 'news'])->name('news');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
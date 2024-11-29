<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// Public-facing routes for events
Route::get('/events', [EventController::class, 'index'])->name('events.index'); // Show events
Route::post('/events/register', [EventController::class, 'register'])->name('events.register'); // Register for an event

// Admin routes for managing events
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admininterface', [AdminController::class, 'index'])->name('admin.dashboard'); // Admin dashboard

    Route::post('/admin/events', [AdminController::class, 'store'])->name('admin.events.store'); // Create event
    Route::get('/admin/events/{id}/edit', [AdminController::class, 'edit'])->name('admin.events.edit'); // Edit event
    Route::put('/admin/events/{id}', [AdminController::class, 'update'])->name('admin.events.update'); // Update event
    Route::delete('/admin/events/{id}', [AdminController::class, 'destroy'])->name('admin.events.destroy'); // Delete event

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});


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
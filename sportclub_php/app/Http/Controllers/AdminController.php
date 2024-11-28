<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalEvents = Event::count();
        $events = Event::all();

        return view('admininterface', compact('totalUsers', 'totalEvents', 'events'));
    }

    public function members()
    {
        $members = User::where('role', 'user')->get();
        return view('members.index', compact('members'));
    }
    
}


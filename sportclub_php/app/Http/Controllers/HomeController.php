<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Restrict access to the 'news' and 'events' methods only to authenticated users
        $this->middleware('auth')->only(['news', 'events']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the events page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function events()
    {
        $events = Event::all(); // Fetch all events from the database
        return view('events', compact('events'));
    }

    /**
     * Show the news page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        // Fetch news items from a model (assuming you have a News model)
        $news = []; // Replace with actual data fetching
        return view('news', compact('news'));
    }
}

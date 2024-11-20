<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Fetch all events
        return view('events.index', compact('events')); // Pass events to the view
    }

    public function register(Event $event)
{
    $user = auth()->user(); // Get authenticated user

    // Attach the user to the event if not already registered
    if (!$user->events->contains($event->id)) {
        $user->events()->attach($event->id);
    }

    return back()->with('success', 'You have successfully registered for the event.');
}

}

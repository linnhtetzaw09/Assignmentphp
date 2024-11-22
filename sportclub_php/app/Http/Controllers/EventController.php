<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventUser;


class EventController extends Controller
{
    public function index()
{
    $events = Event::all(); // Fetch all events from the database
    return view('events', compact('events'));
}

public function register(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:15',
            'event_id' => 'required|exists:events,id', // Ensure the event exists
        ]);

        // Create the event registration
        EventUser::create([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'phone' => $validated['phone'],
            'event_id' => $validated['event_id'],
        ]);

        // Redirect with a success message
        return redirect()->route('events')->with('success', 'Registration successful!');
    }


}

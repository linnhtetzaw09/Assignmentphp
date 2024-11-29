<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventUser;

class EventController extends Controller
{
    public function index()
    {
        // Fetch all events for public view
        $events = Event::all();
        return view('events', compact('events')); // Render public events page
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:15',
            'event_id' => 'required|exists:events,id',
        ]);

        // Prevent duplicate registrations
        if (EventUser::where('phone', $validated['phone'])->where('event_id', $validated['event_id'])->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'You are already registered for this event.',
            ]);
        }

        // Save the registration
        EventUser::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
        ]);
    }
}

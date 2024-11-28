<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EventUser;


class EventController extends Controller
{

    public function index()
    {
        // Fetch all events from the database
        $events = Event::all();

        // Count of users and events
        $totalUsers = User::count();
        $totalEvents = Event::count();

        // Return the admin view with events and statistics data
        return view('admininterface', compact('events', 'totalUsers', 'totalEvents'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'sport' => 'required|string|max:255',
            'age_group' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:5000',
        ]);

        // Store the event image
        $imagePath = $request->file('image')->store('events', 'public');

        // Create a new event
        Event::create([
            'title' => $validated['title'],
            'event_date' => $validated['event_date'],
            'time' => $validated['time'],
            'location' => $validated['location'],
            'sport' => $validated['sport'],
            'age_group' => $validated['age_group'],
            'image' => $imagePath,
            'description' => $validated['description'],
        ]);

        // Return back to the admin page with success message
        return redirect()->back()->with('success', 'Event created successfully!');
    }


    public function edit($id)
    {
        // Fetch the event for editing
        $event = Event::findOrFail($id);
        return response()->json($event); // Return event details as JSON for editing
    }


    public function update(Request $request, $id)
    {

    $event = Event::findOrFail($id);

        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'sport' => 'required|string|max:255',
            'age_group' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:5000',
        ]);

        // Update the image if a new one is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image = $imagePath;
        }

        // Update other fields
        $event->update($validated);

        return redirect()->back()->with('success', 'Event updated successfully!');
    }


    public function destroy($id)
    {
        // Find the event by ID and delete
        $event = Event::findOrFail($id);
        $event->delete();

        // Return back to the admin page with success message
        return redirect()->back()->with('success', 'Event deleted successfully!');
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

    try {
        // Create the event registration
        EventUser::create([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'phone' => $validated['phone'],
            'event_id' => $validated['event_id'],
        ]);

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
        ]);

    } catch (\Exception $e) {
        // Return error response
        return response()->json([
            'success' => false,
            'message' => 'Registration failed. Please try again.',
        ]);
    }
}



}
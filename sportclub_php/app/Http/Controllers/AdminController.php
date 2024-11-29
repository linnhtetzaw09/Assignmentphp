<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); 
    }

    public function index()
    {
        // Fetch all events and users statistics
        $events = Event::all();
        $users = User::all(); // Fetch all users
        $totalUsers = User::count();
        $totalEvents = $events->count();
        
        // Render the admin interface
        return view('admininterface', compact('events', 'totalUsers', 'totalEvents', 'users'));
    }

    public function store(Request $request)
    {
        // Validate the request
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

        // Save the event
        $validated['image'] = $request->file('image')->store('events', 'public');
        Event::create($validated);

        return redirect()->back()->with('success', 'Event created successfully!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event); // Send JSON data for editing
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Validate request
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

        // Update the event and image if uploaded
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($validated);

        return redirect()->back()->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('success', 'Event deleted successfully!');
    }
}

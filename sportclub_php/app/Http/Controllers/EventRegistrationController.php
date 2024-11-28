<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventUser; 

class EventRegistrationController extends Controller
{
    public function register(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:12|max:100',
            'phone' => 'required|string|max:15',
            'event_id' => 'required|exists:events,id', 
        ]);

        // Create a new registration
        $registration = new EventUser();
        $registration->name = $request->name;
        $registration->age = $request->age;
        $registration->phone = $request->phone;
        $registration->event_id = $request->event_id; // Dynamically handle the event_id
        $registration->save();

        $registrationSuccessful = true; // Or false based on your registration logic

    if ($registrationSuccessful) {
        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Registration failed.',
        ]);
    }
    }
}
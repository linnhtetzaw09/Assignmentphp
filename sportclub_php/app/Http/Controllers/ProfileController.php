<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
{
    $request->validate([
        'preferred_sport' => 'nullable|string|max:255',
        'skill_level' => 'nullable|string|max:255',
    ]);

    // Update the authenticated user
    auth()->user()->update($request->only('preferred_sport', 'skill_level'));

    // Redirect to the index page with a success message
    return redirect()->route('index')->with('success', 'Profile updated successfully.');
}



}



?>

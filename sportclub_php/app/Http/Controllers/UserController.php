<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admininterface', compact('users')); // Pass users to the view
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        return response()->json($user); // Return user data as JSON
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'preferred_sport' => $request->preferred_sport,
            'skill_level' => $request->skill_level,
        ]);

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Delete the user
        return redirect()->back()->with('success', 'User deleted successfully!');
    }
}

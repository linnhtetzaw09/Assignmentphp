<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Ensures unique emails
            'password' => 'required|min:6|confirmed', // Password confirmation
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
        ]);

        return redirect()->route('login.form')->with('success', 'Registration successful. Please log in.');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt login
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect()->route('home')->with('success', 'Logged in successfully.');
    }

    return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
}


    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')->with('success', 'Logged out successfully.');
    }
}

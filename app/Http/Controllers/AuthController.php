<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import Request class from the correct namespace
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        // Debugging: Log the input credentials
        logger('Input Credentials: ' . print_r($request->only('email_address', 'password'), true));
    
        // Validate the user's login credentials
        $credentials = $request->only('email_address', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication was successful
            logger('Authentication successful');
            return redirect()->intended('/dashboard'); // Redirect authenticated users to the dashboard
        }
    
        // Authentication failed
        logger('Authentication failed');
        return back()->withInput()->withErrors(['email' => 'Invalid email or password']);
    }
    
}

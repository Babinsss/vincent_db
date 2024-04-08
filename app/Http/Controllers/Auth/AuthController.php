<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        echo "Login method executed"; // Add this line for testing
        // Validate the user's input
        $credentials = $request->validate([
            'email_address' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/home');
        }
    
        // Authentication failed
        return redirect()->back()->withErrors(['email_address' => 'Invalid email or password']);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}

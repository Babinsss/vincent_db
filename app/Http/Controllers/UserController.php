<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{   
    

    
    //index
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('user.index', compact('users')); // Pass the users data to the view
    }
    

    //show


    
    //store
    public function create()
    {
        $genders = Gender::all();
        return view('user.create', compact('genders'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['nullable', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'suffix_name' => ['nullable', 'max:255'],
            'birth_date' => ['required', 'date'],
            'gender_id' => ['required'],
            'address' => ['required', 'max:255'],
            'contact_number' => ['required'],
            'email_address' => ['required', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ], [
            'gender_id.required' => 'Please select a gender.',
        ]);

        
        // Hash the password
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        // return dd($validatedData);


        // // Create a new user record
        User::create($validatedData);

        // Redirect the user to the desired location
        return redirect('/user')->with('success', 'User added successfully.');
    }



    //edit
    //update
    //delete
    //destroy
    public function deleteUser(Request $request)
    {
        // Retrieve the user ID from the request
        $userId = $request->input('user_id');

        // Find the user by ID
        $user = User::find($userId);

        // Check if the user exists
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Delete the user
        $user->delete();

        // Redirect back with success message
        return redirect('/user')->with('success', 'User deleted successfully.');
    }
    public function showDeleteConfirmation($user_id)
    {
        // Find the user by ID
        $user = User::find($user_id);

        // Check if the user exists
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Return the delete confirmation view with the user data
        return view('user.delete', ['user' => $user]);

    }
    public function view($user_id)
    {
        $user = User::find($user_id);
    
        if (!$user) {
            // Handle the case where the user was not found
            return redirect()->route('userNotFound');
        }
    
        return view('user.view', ['user' => $user]);
    }
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('user.edit', compact('user'));
    }
    
    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->update($request->all());
        return redirect()->route('viewUser', $user_id);
    }
    
}



<?php

namespace App\Http\Controllers;

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


    //create
    public function create()
    {
        return view('user.create');
    }

    //store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'suffix' => ['nullable', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string', 'in:Male,Female'],
            'address' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'email_address' => ['required', 'string', 'email_address', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);



        // Create a new user
        // $user = new User([
        //     'firstname' => $request->firstname,
        //     'middlename' => $request->middlename,
        //     'lastname' => $request->lastname,
        //     'suffix' => $request->suffix,
        //     'birthdate' => $request->birthdate,
        //     'gender' => $request->gender,
        //     'address' => $request->address,
        //     'contact_number' => $request->contact_number,
        //     'email' => $request->email_address,
        //     'username' => $request->username,
        //     'password' => bcrypt($request->password),
        // ]);

        User::create($validated);

        // Save the user
        // $user->save();

        // Redirect to store.blade.php and pass user data
        // return view('user.store', ['user' => $user]);

        return redirect('/user')->with('message_success', 'User successfully saved!');
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
        return redirect()->route('/user')->with('success', 'User deleted successfully.');
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
}


<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Index page showing all users
    public function index(Request $request)
    {
        $search = $request->input('search');
        $users = User::query()->with('gender'); // Eager load the gender relationship

        if ($search) {
            $users->where(function ($query) use ($search) {
                $query->where('first_name', 'LIKE', "%{$search}%")
                    ->orWhere('last_name', 'LIKE', "%{$search}%")
                    ->orWhere('email_address', 'LIKE', "%{$search}%");
            });

            if (strtolower($search) == 'male' || strtolower($search) == 'female') {
                $users->orWhereHas('gender', function ($query) use ($search) {
                    $query->where('gender', $search);
                });
            }
        }

        $users = $users->paginate(10);
        $users->appends(['search' => $search]); // Manually append the search query to pagination links

        return view('user.index', compact('users', 'search'));
    }

    // Show the form to create a new user
    public function create()
    {
        $genders = Gender::all();
        return view('user.create', compact('genders'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['nullable', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'suffix_name' => ['max:255'],
            'birth_date' => ['required', 'date'],
            'gender_id' => ['required', 'exists:genders,gender_id'], // Ensure gender_id exists in the 'genders' table
            'address' => ['required', 'max:255'],
            'contact_number' => ['required'],
            'email_address' => ['required', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'user_image' => ['nullable', 'image', 'max:20480'], // Max size: 10MB, mime types: jpg, jpeg, png, gif
        ], [
            'gender_id.required' => 'Please select a gender.',
            'gender_id.exists' => 'Please select a valid gender.', // Error message for invalid gender_id
        ]);

        // Handle image upload
        if ($request->hasFile('user_image')) {
            $image = $request->file('user_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['user_image'] = 'images/' . $imageName;
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/user')->with('success', 'User added successfully.');
    }

    // Show user details
    public function view($user_id)
    {
        $user = User::find($user_id);

        if (!$user) {
            return redirect()->route('userNotFound');
        }

        return view('user.view', ['user' => $user]);
    }

    // Show the form to edit user details
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('user.edit', compact('user'));
    }

    // Update user details
    public function update(Request $request, User $user)
    {
        // return  ddd($request);
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['nullable', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'suffix_name' => ['nullable', 'max:255'],
            'gender_id' => ['required'],
            'birth_date' => ['required'],
            'email_address' => [
                'required',
                'email',
            ],
            'user_image' => [
                'nullable', 'image', 'max:200000'
            ]
        ]);

        $validated = $validator->validate();

        if ($request->hasFile('user_image')) {
            $filenameWithExtension = $request->file('user_image');
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('user_image')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('user_image')->storeAs('public/img/user', $filenameToStore);
            $validated['user_image'] = $filenameToStore;
        }

        // return ddd($validated);

        $user->update($validated);

        return redirect('/user')->with('message_success', 'User updated successfully.');
    }

    // Show delete confirmation page
    public function showDeleteConfirmation($user_id)
    {
        $user = User::find($user_id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('user.delete', ['user' => $user]);
    }

    // Delete user
    public function deleteUser(Request $request)
    {
        $userId = $request->input('user_id');
        $user = User::find($userId);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->delete();

        return redirect('/user')->with('success', 'User deleted successfully.');
    }

    // Home page
    public function home()
    {
        return view('user.home');
    }
}

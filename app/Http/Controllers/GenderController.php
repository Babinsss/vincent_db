<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    // index
    public function index()
    {
        $genders = Gender::all(); // SELECT * FROM table_genders;
        return view('gender.index', compact('genders'));
    }

    // show
    public function show($id)
    {
        $gender = Gender::find($id); // Retrieve the gender record by ID
        return view('gender.show', compact('gender')); // Pass the $gender variable to the view
    }

    // create
    public function create()
    {
        return view('gender.create');
    }

    // store
    public function store(Request  $request)
    {
        $validated = $request->validate([
            'gender' => ['required']
        ]);

        Gender::create($validated);

        return redirect('/genders')->with('message_success', 'Gender successfully saved!');
    }

    // edit
    public function edit($id)
    {
        $gender = Gender::find($id); //SELECT * FROM table_gendes WHERE gender_id = $id;
        return view('gender.edit', compact('gender'));
    }

    // update
    public function update(Request $request, Gender $gender)
    {
        $validated = $request->validate([
            'gender' => ['required']
        ]);

        $gender->update($validated);

        return redirect('/genders')->with('message_success', 'Gender successfully updated!');
    }

    // delete  
    public function delete($id)
    {
        $gender = Gender::find($id);
        return view('gender.delete', compact('gender'));
    }

    public function destroy(Gender $gender)
    {
        $gender->delete();
        return redirect('/genders')->with('message_success', 'Gender deleted successfully.');
    }
}

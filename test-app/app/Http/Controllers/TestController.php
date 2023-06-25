<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('index', compact('users'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('index')->with('success', 'User created successfully.');
    }
    public function edit($Id)
    {
        $user = User::find($Id);
        return view('edit', compact('user'));
    }
    public function update(Request $request, $Id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $user = User::findOrFail($Id);
        $user->update($request->all());

        return redirect()->route('index')->with('success', 'User updated successfully.');
    }
    public function distroy($Id)
    {
        $user = User::findOrFail($Id);
        $user->delete();
        return redirect()->route('index')->with('success', 'User deleted successfully.');
    }
}

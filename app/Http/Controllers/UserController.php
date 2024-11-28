<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        /*$users = User::all();

        return view('users.index', ['users' => $users]);
        */

        $profileData = Profile::with('users')->get();

        return view('users.index', [
            'profiles' => $profileData,
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {

        $request->validate([
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'contact_number' => 'required|max:11',
            'address' => 'required|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|max:8',
        ]);

        Profile::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'contact_number' => $request['contact_number'],
            'address' => $request['address']
        ])->users()->create([ // Calls users() method in Profile (model)
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        return redirect(route('users.index'))->with('success', 'User created successfully!');
    }

    /*
    public function createUsers() {
        return view('/createusers');
    }


    */
}

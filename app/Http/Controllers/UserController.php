<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {

        Profile::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'contact_number' => $request['contact_number'],
            'address' => $request['address']
        ])->users()->create([
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        return redirect(route('users.index'));
    }

    /*
    public function createUsers() {
        return view('/createusers');
    }


    */
}

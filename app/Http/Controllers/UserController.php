<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {


        $users = User::all();

        return inertia('User/all', [
            'users' => $users
        ]);
    }

    function add()
    {
        return inertia('User/Add');
    }

    function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);

        User::create($request->all());
        return to_route('user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        /* $roles = \App\Role::all(); */
        $users = \App\User::all();
        return view('user.index', compact('users'));
    }
}

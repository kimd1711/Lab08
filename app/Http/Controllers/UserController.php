<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Eager load profile để tránh N+1
        $users = User::with('profile')->get();
        return view('users.index', compact('users'));
    }
}

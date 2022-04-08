<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('Backend.user.index', compact('users'));
    }

    public function show(User $user)
    {
        $user = $user->load('first_dose', 'second_dose', 'vaccine', 'hospital');
        return view('Backend.user.show', compact('user'));
    }
}

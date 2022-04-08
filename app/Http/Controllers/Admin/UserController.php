<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\FirstDoseMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function sendMailForFirstDose(User $user)
    {
        $user->dose_one = 1;
        $user->save();

        Mail::to($user->email)->send(new FirstDoseMail($user));
        session()->flash('success', 'Mail Sent Successfully!');
        return back();
    }
}

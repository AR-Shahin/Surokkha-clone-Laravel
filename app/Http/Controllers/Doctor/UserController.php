<?php

namespace App\Http\Controllers\Doctor;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function firstDose()
    {
        $users = User::doctorFirstDosePending()->get();
        return view('doctor.user.first-dose', compact('users'));
    }

    public function firstDosePush(User $user)
    {
        $user->status = 'first_dose';
        $user->save();
        $user->first_dose()->create([
            'vaccine_id' => $user->vaccine_id,
            'doctor_id' => auth('doctor')->id(),
            'date' => now()
        ]);
        session()->flash('success', 'Push First Dose!');

        return back();
    }

    public function secondDose()
    {
        $users = User::doctorSecondDosePending()->get();
        return view('doctor.user.second-dose', compact('users'));
    }

    public function secondDosePush(User $user)
    {
        $user->status = 'second_dose';
        $user->save();
        $user->second_dose()->create([
            'vaccine_id' => $user->vaccine_id,
            'doctor_id' => auth('doctor')->id(),
            'date' => now()
        ]);
        session()->flash('success', 'Pushed Second Dose!');

        return back();
    }
}

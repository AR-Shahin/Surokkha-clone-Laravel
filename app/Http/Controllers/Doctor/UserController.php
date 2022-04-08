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
            'date' => now()
        ]);
        session()->flash('success', 'Push First Dose!');

        return back();
    }
}

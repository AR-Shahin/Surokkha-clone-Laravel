<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaccineStatusController extends Controller
{
    public function checkVaccineStatus(Request $request)
    {
        $request->validate([
            'email' => ['required', 'exists:users,email'],
            'nid' => ['required', 'exists:users,nid', 'numeric'],
        ]);

        $data = [
            'user' => User::whereEmail($request->email)->first()
        ];

        if ($data['user']->status == 'pending') {
            return back()->withInput(['email' => $request->email, 'nid' => $request->nid])->with("status", "Your Status is Pending Now!");
        }

        if ($data['user']->status == 'first_dose') {
            return back()->withInput(['email' => $request->email, 'nid' => $request->nid])->with("status", "You have completed First Dose Vaccine!");
        }

        if ($data['user']->status == 'second_dose') {
            return back()->withInput(['email' => $request->email, 'nid' => $request->nid])->with("status", "You have completed Second Dose Vaccine!");
        }
    }
}

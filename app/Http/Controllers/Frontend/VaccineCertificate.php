<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaccineCertificate extends Controller
{
    public function index()
    {
        return view('vaccine-certificate');
    }


    public function downloadVaccineCertificate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'exists:users,email'],
            'nid' => ['required', 'exists:users,nid', 'numeric'],
        ]);

        $data = [
            'user' => User::whereEmail($request->email)->first()
        ];

        return $data;
    }
}

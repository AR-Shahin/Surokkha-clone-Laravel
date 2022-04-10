<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('doctor.dashboard', [
            'users' => User::DoctorUsers()->count(),
        ]);
    }
}

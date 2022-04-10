<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Backend.dashboard', [
            'vaccine' => Vaccine::count(),
            'user' => User::count(),
            'hospital' => Hospital::count(),
            'doctor' => Doctor::count(),
        ]);
    }
}

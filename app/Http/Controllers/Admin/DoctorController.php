<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('hospital.district.division')->latest()->get();

        return view('Backend.doctor.index', compact('doctors'));
    }
}

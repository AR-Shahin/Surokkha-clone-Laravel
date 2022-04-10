<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('hospital.district.division')->latest()->get();

        return view('Backend.doctor.index', compact('doctors'));
    }

    public function create()
    {
        $divisions = Division::latest()->get();
        return view('Backend.doctor.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:doctors,email'],
            'password' => ['required'],
            'hospital_id' => ['required'],
        ]);


        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'hospital_id' => $request->hospital_id,
        ]);
        session()->flash('success', 'Doctor Created Successfully!');
        return redirect()->route('admin.doctor.index');
    }
}

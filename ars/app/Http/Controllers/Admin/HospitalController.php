<?php

namespace App\Http\Controllers\Admin;

use App\Models\Division;
use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::with('district.division')->latest()->get();
        return view('Backend.hospital.index', compact('hospitals'));
    }

    public function getAllData()
    {
        return Hospital::with('district')->latest()->get();
    }
    function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'district_id' => ['required'],
        ]);

        $crud =  Hospital::create([
            'name' => $request->name,
            'district_id' => $request->district_id
        ]);
        if ($crud) {
            session()->flash('success', 'Hospital Created Successfully!');
            return redirect()->route('admin.hospital.index');
        }
    }
    public function create()
    {
        $divisions = Division::latest()->get();

        return view('Backend.hospital.create', compact('divisions'));
    }
    public function show(Hospital $hospital)
    {
        return $hospital;
    }

    public function edit(Hospital $hospital)
    {
        return $hospital;
    }

    public function destroy(Hospital $hospital)
    {
        session()->flash('success', 'Hospital Deleted Successfully!');

        $hospital->delete();

        return back();
    }
}

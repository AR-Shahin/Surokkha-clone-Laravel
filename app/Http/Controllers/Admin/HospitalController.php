<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

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
        $crud =  Hospital::create([
            'name' => $request->name,
            'division_id' => $request->division_id
        ]);
        if ($crud) {
            return true;
        }
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
        return $hospital->delete();
    }
}

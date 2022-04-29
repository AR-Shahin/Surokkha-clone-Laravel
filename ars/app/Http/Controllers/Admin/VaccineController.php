<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        return view('Backend.vaccine.index');
    }

    public function getAllData()
    {
        return Vaccine::latest()->get();
    }
    function store(Request $request)
    {
        $crud =  Vaccine::create([
            'name' => $request->name,
            'available' => rand(0, 50)
        ]);
        if ($crud) {
            return true;
        }
    }

    public function show(Vaccine $vaccine)
    {
        return $vaccine;
    }

    public function edit(Vaccine $vaccine)
    {
        return $vaccine;
    }

    public function destroy(Vaccine $vaccine)
    {
        return $vaccine->delete();
    }
}

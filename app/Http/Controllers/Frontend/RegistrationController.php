<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        $divisions = Division::get();
        return view('registration', compact('divisions'));
    }

    public function districtDivisions(Division $division)
    {
        return $division->load('districts');
    }

    public function districtHospitals(District $district)
    {
        return $district->load('hospitals');
    }
}

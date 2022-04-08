<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        $divisions = Division::get();
        $vaccines = Vaccine::isAvailable()->get();
        return view('registration', compact('divisions', 'vaccines'));
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

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Mail\UserRegistrationMail;
use App\Models\District;
use App\Models\Division;
use App\Models\User;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function handleRegistration(UserRequest $request)
    {
        $user = User::create($request->except(['division', 'district']));
        Mail::to($user->email)->send(new UserRegistrationMail($user));
        session()->flash('success', 'Registration Successfully Done! Check Your Email');
        session()->flash('noDiseases', true);
        return back();
    }
}

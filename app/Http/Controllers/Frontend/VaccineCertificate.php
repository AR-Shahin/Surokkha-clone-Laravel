<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class VaccineCertificate extends Controller
{
    public function index()
    {
        return view('vaccine-certificate');
    }


    public function downloadVaccineCertificate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'exists:users,email'],
            'nid' => ['required', 'exists:users,nid', 'numeric'],
        ]);

        $data = [
            'user' => User::whereEmail($request->email)->first()
        ];

        // return $data['user']->status;
        if ($data['user']->status == 'second_dose') {
            $pdf = PDF::loadView('pdf.vaccine_certificate_pdf', $data);
            $rand = rand(1, 500);
            return $pdf->download("vaccine-certificate-{$data['user']->name}-{$rand}.pdf");
        } else {
            session()->flash('error', "You're not able to download Vaccine Certificate!");
            return back()->withInput(['email' => $request->email, 'nid' => $request->nid]);
        }
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class TikaCardController extends Controller
{
    public function index()
    {
        return view('tika-card');
    }

    public function downloadVaccineCard(Request $request)
    {
        $request->validate([
            'email' => ['required', 'exists:users,email'],
            'nid' => ['required', 'exists:users,nid', 'numeric'],
        ]);

        $data = [
            'user' => User::whereEmail($request->email)->first()
        ];

        $pdf = PDF::loadView('pdf.test_pdf', $data);
        $rand = rand(1, 500);
        return $pdf->download("vaccine-card-{$data['user']->name}-{$rand}.pdf");
    }
}

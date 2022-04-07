<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        return view('Backend.division.index');
    }

    public function getAllData()
    {
        return Division::latest()->get();
    }
    function store(Request $request)
    {
        $crud =  Division::create([
            'name' => $request->name,
        ]);
        if ($crud) {
            return true;
        }
    }

    public function show(Division $division)
    {
        info($division);
        return $division;
    }

    public function edit(Division $division)
    {
        return $division;
    }

    public function destroy(Division $division)
    {
        return $division->delete();
    }
}

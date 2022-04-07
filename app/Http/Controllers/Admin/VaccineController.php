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
    public function update(Request $request, Crud $crud)
    {

        $request->validate([
            'name' => "required|unique:cruds,name,{$crud->id}",
        ]);

        if ($request->file('image')) {
            $request->validate([
                'image' => ['required', 'image', 'mimes:png,jpg,jpeg']
            ]);
            $olgImage = $crud->image;
            $crud =   $crud->update([
                'name' => $request->name,
                'slug' => $request->name,
                'image' => File::upload($request->file('image'), 'crud')
            ]);
            File::deleteFile($olgImage);
        } else {
            $crud =   $crud->update([
                'name' => $request->name,
                'slug' => $request->name
            ]);
        }

        if ($crud) {
            return true;
        } else {
            return false;
        }
    }
}

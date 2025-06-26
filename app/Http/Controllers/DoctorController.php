<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('priceCategories')->get();

        return view('doctors.index', compact('doctors'));
    }

    public function show($slug)
    {
        $doctor = Doctor::with('priceCategories')->get()->firstWhere(function ($doctor) use ($slug) {
            return Str::slug($doctor->name) === $slug;
        });

        if (!$doctor) {
            abort(404);
        }

        return view('doctors.show', compact('doctor'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function showDoctors(){
        $doctors = doctor::all();
        return view('user.appointment', compact('doctors'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcomePage(){
        $doctors = Doctor::all();
//        dd($doctors);
        return view('welcome',compact('doctors'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurDoctorController extends Controller
{
    public function ourDoctorView()
    {
        return view('front-end.OurDoctor.ourDoctor');
    }
}

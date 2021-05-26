<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TherapyController extends Controller
{
    public function therapyView()
    {
        return view('front-end.Therapy.therapy');
    }
}

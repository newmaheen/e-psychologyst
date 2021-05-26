<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function tutorialView()
    {
        return view('front-end.Tutorial.tutorial');
    }
}

<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['doctors'] = Doctor::where('is_doctor','=',1)->get();
        $data['message']="";
//        $data['doctors'] = Doctor::where('is_doctor','=',1)->get();
//        dd($data);
        return view('front-end.home.home',$data);
    }
    public function success()
    {
        $data['doctors'] = Doctor::where('is_doctor','=',1)->get();
        $data['message'] = "Appointment Successful! Please check your email for more info";

        return view('front-end.home.home',$data);
    }
}

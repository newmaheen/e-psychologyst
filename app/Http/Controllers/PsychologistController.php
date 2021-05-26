<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use App\Blog;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class PsychologistController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $appointment = Appointment::orderBy('id','DESC')->paginate(5);
        $doctor = Doctor::orderBy('id','DESC')->where('is_doctor',true)->paginate(5);

      return view('admin.home.home',[
          'appointments' => $appointment,
          'doctors'     =>$doctor
      ]);
    }

    public function doctorList(){
        $data['doctors'] = Doctor::orderBy('id','DESC')->where('is_doctor',true)->paginate(15);
        return view('admin.doctors.index',$data);
    }
    public function blogList(){
        $data['blogs'] = Blog::orderBy('id','DESC')->where('is_blog',true)->paginate(15);
        return view('admin.blogs.index',$data);
    }
    public function requests(){
        $data['doctors'] = Doctor::orderBy('id','DESC')->where('is_doctor',false)->paginate(15);
        return view('admin.doctors.requests',$data);
    }
    public function requestsBlog(){
        $data['blogs'] = Blog::orderBy('id','DESC')->where('is_blog',false)->paginate(15);
        return view('admin.blogs.requests',$data);
    }
    public function approveDoctor($id){
//        dd($id);
        $doc = Doctor::findOrFail($id);
        if($doc->is_doctor == false){
            $doc->is_doctor = true;
        }else{
            $doc->is_doctor = false;
        }
        $doc->save();
        return redirect()->back();
    }

    public function approveBlog($id){
        //        dd($id);
                $doc = Blog::findOrFail($id);
                if($doc->is_blog == false){
                    $doc->is_blog = true;
                }else{
                    $doc->is_blog = false;
                }
                $doc->save();
                return redirect()->back();
            }

}

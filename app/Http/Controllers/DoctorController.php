<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Prescription;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DoctorController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:doctor');
    }
    public function index()
    {
        
        
        $current_doctor = Auth::user()->id;
      

        $appointment = Appointment::where('is_appointed','=',0)
        ->where('doctor_id','=',$current_doctor)
        ->get();
 

        return view('doctor.home.home',[
            'appointments' => $appointment

        ]);
    }

    public function edit(){
        $data['doctor'] = Auth::user();
        return view('doctor.edit',$data);
    }
    public function update(Request $request){
        $profileImage = $request->file('image');
        $doctor =Doctor::findOrFail(Auth::id());
            if($profileImage) {

                if ($doctor->image != null && file_exists($doctor->image)) {
                    unlink(asset($doctor->image));
                }
                $imageName = $profileImage->getClientOriginalName();
                $directory = 'public/doctor/image/';
                $imageUrl = $directory . $imageName;
                $profileImage->move($directory, $imageName);
                $doctor->image = $imageUrl;
            }
            $doctor->name = $request->name;
            $doctor->address = $request->address;
            $doctor->phone =$request->phone;
            $doctor->last_degree=$request->last_degree;
            $doctor->save();

            return redirect()->route('doctor.profile');
    }
    public function profile(){
        $data['doctor'] = Doctor::with(['experiences','educations'])->where('id',auth()->user()->id)->first();
        return view('doctor.profile',$data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\Appointment;

use Illuminate\Http\Request;
use Mail;

class PrescriptionController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:doctor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog_information'] = Blog::
            where('doctor_id',auth()->user()->id)
            ->get();
        return view('doctor.blogInformation.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('doctor.prescription.prescription');
    }
    public function view($appointment_id)
    {

        return view('doctor.prescription.prescription')->with('appointment_id',$appointment_id);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'disorder_history' => 'required',
            'prescription' => 'required',
            'test' => 'required',
        ]);
        

        $prescription = new Prescription();
        $prescription->disorder_history = $request->disorder_history;
        $prescription->prescription = $request->prescription;
        $prescription->test = $request->test;
        $prescription->is_prescribed = 1;
        $prescription->doctor_id = auth()->user()->id;
        $prescription->appointment_id = $request->patient_id;

        $data['title']= "Doctor Prescription Confirmation";
        $data['history'] = $request->disorder_history;
        $data['prescription']= $request->prescription;
        $data['test']= $request->test;


      $appointment_info = Appointment::select('email','name')
        ->where('id',  $request->patient_id)->get();
        $data['name'] = $appointment_info[0]->name;

        Mail::send('front-end.email_prescription', $data, function($message) use ($appointment_info) {

            $message->to($appointment_info[0]->email,$appointment_info[0]->name)

                ->subject('Doctor Prescription Confirmation');
        });

        if($prescription->save())
        {
            Appointment::where('id',  $request->patient_id)->update(array('is_appointed' => 1));

        }
        return redirect()->route('doctor-home');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorSchedule $doctorSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorSchedule $doctorSchedule)
    {
        return view('doctor.schedule.edit',['schedule' =>$doctorSchedule]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorSchedule $doctorSchedule)
    {
        $request->validate([
            'day' => 'required',
            'time_from' => 'required',
            'time_to' => 'required',
        ]);

//        $doctorSchedule = new DoctorSchedule();
        $doctorSchedule->day = $request->day;
        $doctorSchedule->time_from = $request->time_from;
        $doctorSchedule->time_to = $request->time_to;
        $doctorSchedule->save();
        return redirect()->route('doctorSchedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorSchedule $doctorSchedule)
    {
        $doctorSchedule->delete();
        return redirect()->back();
    }
    public function blogList(){
        $data['blogs'] = Blog::orderBy('id','DESC')->where('is_blog',true)->paginate(15);
        return view('admin.blogs.index',$data);
    }
    // public function requests(){
    //     $data['doctors'] = Doctor::orderBy('id','DESC')->where('is_doctor',false)->paginate(15);
    //     return view('admin.doctors.requests',$data);
    // }
}

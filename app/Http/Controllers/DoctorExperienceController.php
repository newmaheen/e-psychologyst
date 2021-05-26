<?php

namespace App\Http\Controllers;

use App\DoctorExperience;
use Illuminate\Http\Request;

class DoctorExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('auth:doctor');
    }
    public function index()
    {
        $data['experiences'] = DoctorExperience::where('doctor_id',auth()->user()->id)->get();
        return view('doctor.experience.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.experience.new');
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
            'position' => 'required',
            'company' => 'required',
            'from' => 'required',
            'details' => 'required',
        ]);

        $doctorExperience = new DoctorExperience();
        $doctorExperience->position = $request->position;
        $doctorExperience->company = $request->company;
        $doctorExperience->from = $request->from;
        $doctorExperience->to = $request->to;
        $doctorExperience->doctor_id = auth()->user()->id;
        $doctorExperience->details = $request->details;
//        dd($doctorExperience);
        $doctorExperience->save();
        return redirect()->route('doctorExperience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorExperience  $doctorExperience
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorExperience $doctorExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorExperience  $doctorExperience
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorExperience $doctorExperience)
    {
        return view('doctor.experience.edit',['experience' => $doctorExperience]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorExperience  $doctorExperience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorExperience $doctorExperience)
    {
        $request->validate([
            'position' => 'required',
            'company' => 'required',
            'from' => 'required',
            'details' => 'required',
        ]);

//        $doctorExperience = new DoctorExperience();
        $doctorExperience->position = $request->position;
        $doctorExperience->company = $request->company;
        $doctorExperience->from = $request->from;
        $doctorExperience->to = $request->to;
        $doctorExperience->doctor_id = auth()->user()->id;
        $doctorExperience->details = $request->details;
//        dd($doctorExperience);
        $doctorExperience->save();
        return redirect()->route('doctorExperience.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorExperience  $doctorExperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorExperience $doctorExperience)
    {
        $doctorExperience->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\DoctorEducation;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorEducationController extends Controller
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
        $data['educations'] = DoctorEducation::where('doctor_id',auth()->user()->id)->get();
        return view('doctor.education.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.education.new');
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
           'degree' => 'required',
           'institute' => 'required',
           'result' => 'required',
           'passing_year' => 'required|numeric',
        ]);

        $doctorEducation = new DoctorEducation();
        $doctorEducation->degree = $request->degree;
        $doctorEducation->result = $request->result;
        $doctorEducation->institute = $request->institute;
        $doctorEducation->passing_year = $request->passing_year;
        $doctorEducation->doctor_id = auth()->user()->id;
        $doctorEducation->details = $request->details;
//        dd($doctorEducation);
        $doctorEducation->save();
        return redirect()->route('education');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorEducation  $doctorEducation
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorEducation $doctorEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorEducation  $doctorEducation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['education'] = DoctorEducation::findorFail($id);
        return view('doctor.education.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorEducation  $doctorEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'degree' => 'required',
            'institute' => 'required',
            'result' => 'required',
            'passing_year' => 'required|numeric',
        ]);

        $doctorEducation = DoctorEducation::findOrFail($id);
        $doctorEducation->degree = $request->degree;
        $doctorEducation->result = $request->result;
        $doctorEducation->institute = $request->institute;
        $doctorEducation->passing_year = $request->passing_year;
//        $doctorEducation->doctor_id = auth()->user()->id;
        $doctorEducation->details = $request->details;
//        dd($doctorEducation);
        $doctorEducation->save();
        return redirect()->route('education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorEducation  $doctorEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctorEducation = DoctorEducation::findOrFail($id);
        $doctorEducation->delete();
        return redirect()->back();
    }
}

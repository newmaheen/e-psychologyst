<?php

namespace App\Http\Controllers;

use App\DoctorSchedule;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
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
        $data['schedules'] = DoctorSchedule::where('doctor_id',auth()->user()->id)->orderBy('day')->get();
        return view('doctor.schedule.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.schedule.new');
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
            'day' => 'required',
            'time_from' => 'required',
            'time_to' => 'required',
        ]);

        $doctorSchedule = new DoctorSchedule();
        $doctorSchedule->day = $request->day;
        $doctorSchedule->time_from = $request->time_from;
        $doctorSchedule->time_to = $request->time_to;
        $doctorSchedule->doctor_id = auth()->user()->id;
        $doctorSchedule->save();
        return redirect()->route('doctorSchedule.index');
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
}

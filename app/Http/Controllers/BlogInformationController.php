<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogInformationController extends Controller
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
        return view('doctor.blogInformation.new');
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
            'blogTitle' => 'required',
            'blogDescription' => 'required',
            'date' => 'required',
        ]);

        $blog = new Blog();
        $blog->name = $request->blogTitle;
        $blog->description = $request->blogDescription;
        $blog->posting_date = $request->date;
        $blog->doctor_id = auth()->user()->id;
        $blog->save();
        return redirect()->route('blogInformation.index');
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

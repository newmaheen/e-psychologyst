<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function newAppointment(Request $request)
    {

       $app = new Appointment();
       $app->name = $request->name;
       $app->email = $request->email;
       $app->phone = $request->phone;
       $app->doctor_id = $request->doctor_id;
       $app->date = $request->date;
       $app->time = $request->time;
//       $app->save();
//       return redirect()->route('success');
        $data['title'] = "Doctor Appointment Confirmation";
        $data['name'] = $app->name;
        $data['date'] = $app->date;
        $data['time'] = $app->time;
        Mail::send('front-end.email', $data, function($message) use ($app) {

            $message->to($app->email, $app->name)

                ->subject('Doctor Appointment Confirmation');
        });

      $app->save();

        return redirect()->back()->with('message', 'Appointment Successful! Please check your email for more info');
    }

}

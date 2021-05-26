<?php

namespace App\Http\Controllers;
use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class adminProfileController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){

        return view('admin.profile.add-profile');
    }
   public  function updateProfile(Request $request){
       $profileImage = $request->file('image');
        $user =Admin::findOrFail(Auth::id());
        if($profileImage){

        if( $user->image!= null && file_exists($user->image)){
                unlink(asset($user->image));
           }
            $imageName = $profileImage->getClientOriginalName();
            $directory = 'public/admin/profile-image/';
            $imageUrl = $directory.$imageName;
            $profileImage ->move($directory , $imageName);

            $user->image= $imageUrl;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->gender =$request->gender;
            $user->birthday=$request->birthday;
            $user->institution=$request->institution;
            $user->subject=$request->subject;
            $user->start_date=$request->start_date;
            $user->end_date=$request->end_date;
            $user->degree=$request->degree;
            $user->grade=$request->grade;
            $user->company_name=$request->company_name;
            $user->location=$request->location;
            $user->job_position=$request->job_position;
            $user->period_form=$request->period_form;
            $user->period_to=$request->period_to;
            $user->save();
        }
        else{

//dd('no imGE');
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->gender =$request->gender;
            $user->birthday=$request->birthday;
            $user->institution=$request->institution;
            $user->subject=$request->subject;
            $user->start_date=$request->start_date;
            $user->end_date=$request->end_date;
            $user->degree=$request->degree;
            $user->grade=$request->grade;
            $user->company_name=$request->company_name;
            $user->location=$request->location;
            $user->job_position=$request->job_position;
            $user->period_form=$request->period_form;
            $user->period_to=$request->period_to;
            $user->save();
        }
       return redirect('/view-profile');
   }
   public function viewProfile(){
      $data['admin'] = Auth::user();
      return view ('admin.profile.view-profile',$data);
   }

}

@extends('admin.master')
@section('title')
    Edit Profile
@endsection
@section('body')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Edit Profile</h4>
                </div>
            </div>
            <form method="post" action="{{route('update-profile')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-box">
                    <h3 class="card-title">Basic Informations</h3>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label >Name</label>
                                            <input type="text" class="form-control " value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label>Email</label>
                                            <input type="email" class="form-control floating" value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="">Birth Date</label>
                                            <input class="form-control" name="birthday"  type="date" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label >Gender</label>
                                            <select class="select form-control " name="gender">
                                                <option @if(Auth::user()->gender=='male') selected @endif value="male ">Male</option>
                                                <option  @if(Auth::user()->gender=='female') selected @endif value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Profile Image:</label>
                                            <input type="file" name="image" class="form-control-file">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h3 class="card-title">Contact Informations</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label >Address</label>
                                <input type="text" name="address" value="{{Auth::user()->address}}" class="form-control " >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                                <label >Phone Number</label>
                                <input type="text" value="{{Auth::user()->phone}}" class="form-control " name="phone" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h3 class="card-title">Education Informations</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label >Institution</label>
                                <input type="text" value="{{Auth::user()->institution}}" name="institution" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label >Subject</label>
                                <input type="text" value="{{Auth::user()->subject}}"  name="subject" class="form-control " >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Starting Date</label>
                                <input type="date" value="{{Auth::user()->start_date}}"  name="start_date" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label>Complete Date</label>
                                <input type="date" date="end_date" value="{{Auth::user()->end_date}}"  class="form-control " >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label>Degree</label>
                                <input type="text" name="degree" value="{{Auth::user()->degree}}"  class="form-control " >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Grade</label>
                                <input type="text" value="{{Auth::user()->grade}}"  name="grade" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="add-more">
                        <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add More Institute</a>
                    </div>
                </div>
                <div class="card-box">
                    <h3 class="card-title">Experience Informations</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label>Company Name</label>
                                <input type="text" value="{{Auth::user()->company_name}}"  name="company_name" class="form-control " >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label >Location</label>
                                <input type="text" value="{{Auth::user()->location}}"  name="location" class="form-control " >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label>Job Position</label>
                                <input type="text" value="{{Auth::user()->job_position}}"  name="job_position" class="form-control ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label >Period From</label>
                                <input type="date" value="{{Auth::user()->period_form}}"  name="period_form" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Period To</label>
                                <input type="date" value="{{Auth::user()->period_to}}"  name="period_to" class="form-control " >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-more">
                        <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add More Experience</a>
                    </div>
                <div class="text-center m-t-20">
                    <button class="btn btn-primary submit-btn" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

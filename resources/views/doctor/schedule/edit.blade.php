@extends('doctor.master')
@section('title','Edit Schedule')

@section('body')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Edit Schedule</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('doctorSchedule.update',$schedule->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Day<span class="text-danger">*</span></label>
                                    <select class="form-control" name="day" id="day" required >
                                        <option value="" disabled>Select Day</option>
                                        <option @if($schedule->day == 'Sun Day') selected @endif value="Sun Day"> Sun Day</option>
                                        <option @if($schedule->day == 'Mon Day') selected @endif value="Mon Day"> Mon day</option>
                                        <option @if($schedule->day == 'Tues Day') selected @endif value="Tues Day"> Tuesday</option>
                                        <option @if($schedule->day == 'Wednesday') selected @endif value="Wednesday"> Wednesday</option>
                                        <option @if ($schedule->day == 'Thursday') selected @endif value="Thursday"> Thursday</option>
                                        <option @if($schedule->day == 'Friday') selected @endif value="Friday"> Friday</option>
                                        <option @if($schedule->day == 'Saturday') selected @endif value="Saturday"> Saturday</option>
                                    </select>
                                    {{--            <input name="day" value="{{ old('day',isset($schedule->day)?$schedule->day:null) }}"  class="form-control" type="text">--}}
                                    @error('day')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Start Time<span class="text-danger">*</span></label>
                                    <input name="time_from" value="{{ $schedule->time_from }}"  class="form-control" type="time">
                                    @error('time_from')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>End time<span class="text-danger">*</span></label>
                                    <input name="time_to" value="{{ $schedule->time_to }}"  class="form-control" type="time">
                                    @error('time_to')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>




                            <div class="col-sm-12 m-t-20 text-center">
                                <button type="submit" name="submit" class="btn btn-primary submit-btn">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('doctor.master')
@section('title','Add New Schedule')

@section('body')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Write Prescription</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('prescription.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                        <input type = "hidden" name="patient_id" value = {{$appointment_id}} />
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Disorder History<span class="text-danger">*</span></label>
                                   
                                    <textarea name="disorder_history" class="form-control" rows="4" cols="50"> </textarea>
                                    @error('disorder_history')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Prescription<span class="text-danger">*</span></label>
                                   
                                    <textarea name="prescription" class="form-control" rows="4" cols="50"> </textarea>
                                    @error('prescription')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Test<span class="text-danger">*</span></label>
                                    <textarea name="test" class="form-control" rows="4" cols="50"> </textarea>
                                    @error('test')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="col-sm-12 m-t-20 text-center">
                                <button type="submit" name="submit" class="btn btn-primary submit-btn">Save and send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

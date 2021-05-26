@extends('admin.master')
@section('title','Doctors List')

@section('body')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Current Doctors</h4>
                </div>
                <div class="col-sm-4 col-6 text-right m-b-30">
                    <a href="{{route('request-doctor')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> View Doctor Requests</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive" >
                        <table class="table table-striped custom-table mb-0 datatable" id="tSearch">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Last Degree</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody id="searchData">
                            @foreach($doctors as $doctor)
                                <tr>
                                    <td>
                                        <a href="#" class="avatar">R</a>
                                        <h2><a href="#">{{$doctor->naame}}</a></h2>
                                    </td>
                                    <td>{{$doctor->address}}</td>
                                    <td>{{$doctor->email}}</td>
                                    <td>{{$doctor->phone}}</td>
                                    <td>{{$doctor->last_degree}}</td>
                                    <td class="text-right">
                                        <div class="btn btn-danger">
                                            <a href="{{ route('approve-doctor',$doctor->id) }}">Make Inactive</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="see-all">
                                <span class="see-all-links" >{{$doctors->links()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

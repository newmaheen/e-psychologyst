@extends('admin.master')
@section('title','Doctors List')

@section('body')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Current Blogs</h4>
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
                                <th>Description</th>
                                <th>Posting Date</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody id="searchData">
                            @foreach($blogs as $blog)
                                <tr>
                                    <!-- <td>
                                        <a href="#" class="avatar">R</a>
                                        <h2><a href="#">{{$blog->name}}</a></h2>
                                    </td> -->
                                    <td>{{$blog->name}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>{{$blog->posting_date}}</td>
                                    <td class="text-right">
                                        <div class="btn btn-danger">
                                            <a href="{{ route('approve-blog',$blog->id) }}">Make Inactive</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

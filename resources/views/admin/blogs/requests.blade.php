@extends('admin.master')
@section('title','Doctors Requests List')

@section('body')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">All Blog Requests</h4>
                </div>
                <div class="col-sm-4 col-6 text-right m-b-30">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive" >
                        <table class="table table-striped custom-table mb-0 datatable" id="tSearch">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Posting Date</th>
                               
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody id="searchData">
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>
                                        <a href="#" class="avatar">R</a>
                                        <h2><a href="#">{{$blog->name}}</a></h2>
                                    </td>
                                    <td>{{$blog->description}}</td>
                                    <td>{{$blog->posting_date}}</td>
                                    <td class="text-right">
                                        <div class="btn btn-dark">
                                            <a href="{{ route('approve-blog',$blog->id) }}">Approve</a>
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

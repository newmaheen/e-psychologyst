@extends('doctor.master')
@section('title','Schedule')

@section('body')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Your blog information</h4>
                </div>
                <div class="col-sm-4 col-6 text-right m-b-30">
                    <a href="{{route('doctorSchedule.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Schedule</a>
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
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="searchData">
                            @foreach($blog_information as $schedule)
                                <tr>
                                    <td>
                                        <a href="#" class="avatar">R</a>
                                        <h2><a href="#">{{$schedule->name}}</a></h2>
                                    </td>
                                    <td>{{$schedule->description}}</td>
                                    <td>{{$schedule->posting_date}}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('doctorSchedule.edit',$schedule->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <form method="post" action="{{ route('doctorSchedule.destroy',$schedule->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="dropdown-item fa fa-trash-o m-r-5" onclick="return confirm('Are you confirm to delete?')"> Delete</button>
                                                </form>

                                            </div>
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
{{--                                <span class="see-all-links" >{{$schedules->links()}}</span>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

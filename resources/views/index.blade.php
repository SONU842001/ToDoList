@extends('layout')
@section('main-content')


    <div>
        <div class="float-left">
            <h4 class="pb-2">My Tasks</h4>
        </div>
        <div class="float-right ">
            <a href="{{ route('Task.create') }}"class="btn btn-info">Create Task</a>
        </div>
        <div class="clearfix">

        </div>
    </div>
    @foreach ($datas as $data)
    <div class="pb-4">
        <div class="card ">
            <div class="card-header">{{ $data->title }}
                <span class="badge rounded-pill bg-warning text-dark ml-1">{{ $data->created_at->diffForHumans() }}</span>
            </div>
             <div class="card-body ">
                <div class="float-left">
                    <div class="card-text">
                        {{ $data->description }}
                        <br>
                        @if ($data->status==='Todo')
                        <span class="badge rounded-pill bg-info text-dark ml-1">
                            Todo
                        </span>
                        @else
                        <span class="badge rounded-pill bg-success text-white ml-1">
                            Done
                        </span>
                        @endif

                        <small>Updated_at:{{ $data->updated_at->diffForHumans() }} </small>

                    </div>


                </div>
                <div class="float-right">
                    <a href="{{ route('Task.edit',$data->id) }}"class="btn btn-success">Edit</a>
                    <a href="{{ route('Task.destroy',$data->id) }}"class="btn btn-danger">Delete</a>
                </div>
            </div>

        </div>
    </div>
@endforeach
@endsection

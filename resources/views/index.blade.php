@extends('layout')
@section('main-content')


    <div>
        <div class="float-left">
            <h4 class="pb-2">My Tasks</h4>
        </div>
        <div class="float-right ">
            <a href="{{ route('Task.create') }}"class="btn btn-info"><i class="fas solid fa-plus-circle mr-1"></i>Create Task</a>
        </div>
        <div class="clearfix">

        </div>
    </div>
    @foreach ($datas as $data)
    <div class="pb-4">
        <div class="card ">
            <div class="card-header">
                @if ($data->status==='Todo')
                    {{ $data->title }}
                @else
                   <del>{{ $data->title }}</del>
                @endif
                <span class="badge rounded-pill bg-warning text-dark ml-1">{{ $data->created_at->diffForHumans() }}</span>
            </div>
             <div class="card-body ">
                <div class="float-left">
                    <div class="card-text">
                        @if ($data->status==='Todo')
                    {{ $data->title }}
                @else
                   <del>{{ $data->title }}</del>
                @endif
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

                        <small>Last Updated -{{ $data->updated_at->diffForHumans() }} </small>

                    </div>


                </div>
                <div class="float-right">
                    <a href="{{ route('Task.edit',$data->id) }}"class="btn btn-success">Edit</a>

                    <form action="{{ route('Task.destroy',$data->id) }}"method="POST" style="display: inline">@csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endforeach
@if (count($datas) === 0)
  <div class="alert alert-danger p-2 ">
      No Task Found .Please Create Task.
      <br>
      <a href="{{ route('Task.create') }}"class="btn btn-info mt-3"><i class="fas solid fa-plus mr-1"></i>Create Task</a>
  </div>

@endif
@endsection

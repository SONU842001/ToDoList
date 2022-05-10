@extends('layout')
@section('main-content')
<div>
    <div class="float-left">
        <h4 class="pb-2">Edit  Task</h4>
    </div>
    <div class="float-right ">
        <a href="{{ route('Task.index') }}"class="btn btn-info">All Tasks</a>
    </div>
    <div class="clearfix">

    </div>
</div>
<div class="card card-body bg-light p-4">
    <form action="{{ route('Task.update',$taskdata->id) }}"method="Post">@csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text"id="title" class="form-control"name="title" value="{{ $taskdata->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Task Description</label>
            <textarea name="description" class="form-control"id="description" value="{{ $taskdata->description }}" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <select class="form-control"name="status" id="">
                <option value="Todo">Todo</option>
                <option value="Done">Done</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

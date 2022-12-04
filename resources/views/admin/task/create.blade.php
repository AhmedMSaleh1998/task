@extends('admin.layout.layout')
@section('content')
@include('inc.errors')
<div class="container mt-5 w-50 p-3">
  <h2 class="text-center text-dark">Create Task</h2>
  <form method="post" action="{{ route('task.store') }}">
    @csrf
    <div class="mb-3 mt-3">
      <label for="title" class="text-dark">title:</label>
      <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="mb-3 mt-3">
        <label for="description" class="text-dark">description:</label>
        <textarea class="form-control" id="description" placeholder="Enter description" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="assigned_to_id" class="text-dark">assigned_to:</label>
        <select id="assigned_to_id" name="assigned_to_id">
            <option value=""> Choose user ...</option>
            @foreach ($users as $user )
            <option value="{{$user->id}}"> {{$user->name}}</option>
             @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection

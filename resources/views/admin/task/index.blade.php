@extends('admin.layout.layout')
@section('content')
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Name</th>
        <th>Descrition</th>
        <th>assgined to</th>
        <th>assgined by</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task )
      <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->assignedTo->name }}</td>
        <td>{{ $task->assignedBy->name }}</td>
        </form>
      </tr
      @endforeach
      </tbody>
    </table>
    <center>
    <div style="width:100px">
    {{ $tasks->links()}}
    </div>
</center>
</div>
@endsection

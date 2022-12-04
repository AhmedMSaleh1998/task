<?php

namespace App\Http\Controllers;

use App\Http\Requests\createTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        $users = User::all();
        return view('admin.task.create',compact('users'));
    }

    public function store(createTaskRequest $request){

        $task = Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'assigned_to_id' => $request->assigned_to_id,
        'assigned_by_id' => auth('admin')->user()->id,
        ]);
        return redirect(route('task.index'));
    }

    public function index(){
        $tasks = Task::paginate(10);
        return view('admin.task.index',compact('tasks'));
     }
}

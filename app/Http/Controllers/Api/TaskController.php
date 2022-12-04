<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\createTaskRequest;
use App\Http\Resources\TaskResource;
use App\models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return responseJson('success','task retrived successfully',TaskResource::collection($tasks));
    }
    public function create(createTaskRequest $request){

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'assigned_to_id' => $request->assigned_to_id,
            'assigned_by_id' => auth('api')->user()->id,
            ]);
        return responseJson('success','task created successfully',new TaskResource($task));
    }
}

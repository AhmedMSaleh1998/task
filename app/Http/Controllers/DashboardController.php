<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users  = User::withCount('tasks')->orderBy('tasks_count','desc')->limit(10)->get();

        return view('admin.index',compact('users'));
    }
}

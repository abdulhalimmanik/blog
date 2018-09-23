<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Task;
use View;
class TasksController extends Controller
{
    public function index()
    {
            
        //$tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        
        return view('tasks.index', compact('tasks'));

    }

    public function show(Task $task)
    {
        //$task = DB::table('tasks')->find($id);
        return $task;
        $task = Task::find($id);
        
        return view('tasks.show', compact('task'));

    }
}

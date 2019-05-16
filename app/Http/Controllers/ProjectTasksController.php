<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;


class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description'=>'required']);
        
        $project->addTask($attributes);

        return back();
    }

    public function update(Task $task)
    {
        $task->update([
            'complete' => request()->has('complete')
        ]);

        return back();
    }
}

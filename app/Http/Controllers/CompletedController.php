<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class CompletedController extends Controller
{
    public function store(Task $task)
    {
        $task->complete();

        return back();
    }

    public function destroy(Task $task)
    {
        $task->incomplete();

        return back();
    }
}

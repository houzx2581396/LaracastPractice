<?php

namespace App\Http\Controllers;

use App\Project;
class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();
        return Project::all();
        return view('projects.index',compact('projects'));
    }
}

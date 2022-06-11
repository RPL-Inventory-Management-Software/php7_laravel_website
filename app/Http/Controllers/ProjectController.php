<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects',[
            'title' => 'All Project',
            'projects' => Project::all()
        ]);
    }

    public function show(Project $project)
    {
        return view ('inventory_software', [
            "title" => "Single Project",
            "project" => $project
        ]);
    }
}

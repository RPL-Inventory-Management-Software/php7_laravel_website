<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest();
        // dd(request('search'));
        if(request('search')) {
            $projects->where('name', 'like', '%' . request('search') . '%');
        }

        return view('projects',[
            'title' => 'All Project',
            'projects' => $projects->get()
            //'projects' => Project::latest()->get()
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

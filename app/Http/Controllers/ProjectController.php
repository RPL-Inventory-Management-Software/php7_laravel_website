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
}

<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\project;

class adminController extends Controller
{
    function index(){
    $project = project::all();
    $about = about::first();

        return view('dashboard.index', compact('project', 'about'));
    }
}

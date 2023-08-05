<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\project;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $about = about::first();
        $project = project::all();

        return view('layouts.app', compact('about', 'project'));

    }
}

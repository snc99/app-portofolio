<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\project;
use App\Models\skill;
use App\Models\User;

class adminController extends Controller
{
    function index(){
    $getUsername = User::all();
    $project = project::all();
    $about = about::first();
    $skill = skill::all();

        return view('dashboard.index', compact('project', 'about', 'getUsername', 'skill'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\project;
use App\Models\skill;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $about = about::first();
        $project = project::all();
        $skill = skill::all();

        return view('layouts.app', compact('about', 'project', 'skill'));

    }
}

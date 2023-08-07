<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\skillController;
use App\Models\project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Login
route::middleware(['guestMiddleware'])->group(function(){
    Route::get('/auth', [loginController::class, 'index'])->name('login');
    Route::post('/auth/login', [loginController::class, 'login']);
});

Route::get('/logout', [loginController::class, 'logout']);


// Route untuk admin
route::middleware(['authMiddleware'])->group(function(){
    route::get('/dashboard', [adminController::class, 'index']);

    route::get('/dashboard/project', [projectController::class, 'project']);
    route::get('/dashboard/createProject', [projectController::class, 'createProject']);
    route::post('/dashboard/project', [projectController::class, 'storeProject']);
    route::get('/dashboard/editProject', [projectController::class, 'editProject']);
    route::get('/dashboard/project/{id}/edit', [projectController::class, 'showEditProject']);
    route::put('/dashboard/project/{id}', [projectController::class, 'updateProject'])->name('updateProject');
    route::delete('/dashboard/project/{id}', [projectController::class, 'deleteProject']);


    route::get('/dashboard/about', [aboutController::class, 'about']);
    route::get('/dashboard/createAbout', [aboutController::class, 'createAbout']);
    route::post('/dashboard/about', [aboutController::class, 'storeAbout']);
    route::get('/dashboard/viewEditAbout', [aboutController::class, 'viewAbout']);
    route::get('/dashboard/about/{id}/edit', [aboutController::class, 'editAbout']);
    route::put('/dashboard/about/{id}', [aboutController::class, 'updateAbout'])->name('updateAbout');
    route::delete('/dashboard/about/{id}', [aboutController::class, 'deleteAbout']);

    route::get('/dashboard/skill', [skillController::class, 'skill']);
    route::get('/dashboard/createSkill', [skillController::class, 'createSkill']);
    route::post('/dashboard/skill', [skillController::class, 'storeSkill']);
    route::get('/dashboard/editSkill', [skillController::class, 'editSkill']);
    route::get('/dashboard/skill/{id}/edit', [skillController::class, 'showEditSkill']);
    route::put('/dashboard/skill/{id}', [skillController::class, 'updateSkill'])->name('updateSkill');
    route::delete('/dashboard/skill/{id}', [skillController::class, 'deleteSkill']);
});

route::get('/home', function(){
    return redirect('/dashboard');
});


// Route Halaman Utama
route::get('/', [homeController::class, 'index']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GearController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gears', [GearController::class, 'index'])->name('gear');
Route::get('/projects', [ProjectController::class, 'index'])->name('project');


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth')->middleware('guest');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Gear
    Route::get('/dashboard/gears', [DashboardController::class, 'showGear'])->name('dashboard.gear');
    Route::get('/dashboard/gears/create', [DashboardController::class, 'createGear'])->name('dashboard.gear.create');
    Route::post('/dashboard/gears', [DashboardController::class, 'storeGear'])->name('dashboard.gear.store');
    Route::get('/dashboard/gears/{gear}/edit', [DashboardController::class, 'editGear'])->name('dashboard.gear.edit');
    Route::put('/dashboard/gears/{gear}', [DashboardController::class, 'updateGear'])->name('dashboard.gear.update');
    Route::delete('/dashboard/gears/{id}', [DashboardController::class, 'destroyGear'])->name('dashboard.gear.destroy');

    // Project
    Route::get('/dashboard/projects', [DashboardController::class, 'showProject'])->name('dashboard.project');
    Route::get('/dashboard/projects/create', [DashboardController::class, 'createProject'])->name('dashboard.project.create');
    Route::post('/dashboard/projects', [DashboardController::class, 'storeProject'])->name('dashboard.project.store');
    Route::get('/dashboard/projects/{project}/edit', [DashboardController::class, 'editProject'])->name('dashboard.project.edit');
    Route::put('/dashboard/projects/{project}', [DashboardController::class, 'updateProject'])->name('dashboard.project.update');
    Route::delete('/dashboard/projects/{project}', [DashboardController::class, 'destroyProject'])->name('dashboard.project.destroy');

    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

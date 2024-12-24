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
    Route::get('/dashboard/gears', [DashboardController::class, 'showGear'])->name('dashboard.gear');
    Route::get('/dashboard/gears/edit/{id}', [DashboardController::class, 'editGear'])->name('dashboard.gear.edit');
    Route::delete('/dashboard/gears/{id}', [DashboardController::class, 'destroyGear'])->name('dashboard.gear.destroy');
    Route::get('/dashboard/projects', [DashboardController::class, 'showProject'])->name('dashboard.project');
    Route::get('/dashboard/projects/edit/{id}', [DashboardController::class, 'editProject'])->name('dashboard.project.edit');
    Route::delete('/dashboard/projects/{id}', [DashboardController::class, 'destroyProject'])->name('dashboard.project.destroy');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

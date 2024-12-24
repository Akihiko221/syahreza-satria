<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.index', ['header' => 'Dashboard']);
    }

    public function showGear()
    {
        return view('dashboards.gears.index', ['header' => 'Gear']);
    }

    public function editGear($id)
    {
        return view('dashboards.gears.edit', ['header' => 'Edit Gear']);
    }

    public function destroyGear($id)
    {

    }

    public function showProject()
    {
        return view('dashboards.projects.index', ['header' => 'Project']);
    }

    public function editProject($id)
    {
        return view('dashboards.projects.edit', ['header' => 'Edit Project']);
    }

    public function destroyProject($id)
    {

    }
}

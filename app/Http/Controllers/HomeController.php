<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(2)->get();
        $gears= Gear::latest()->take(2)->get();
        return view('app.index', ['projects' => $projects, 'gears' => $gears]);
    }
}

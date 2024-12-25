<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use Illuminate\Http\Request;

class GearController extends Controller
{
    public function index()
    {
        $gears = Gear::all();
        return view('app.gears.index', compact('gears'));
    }
}

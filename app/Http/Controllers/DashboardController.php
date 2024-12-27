<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\delete;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::count();
        $gears = Gear::count();
        return view('dashboards.index', ['header' => 'Dashboard', 'projects' => $projects, 'gears' => $gears]);
    }

    // Gear Focus
    public function showGear()
    {
        $gears = Gear::all();
        return view('dashboards.gears.index', ['header' => 'Gear', 'gears' => $gears]);
    }

    public function createGear()
    {
        return view('dashboards.gears.create', ['header' => 'Create Gear']);
    }

    public function storeGear(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|string|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gear = new Gear();
        $gear->brand = $request->brand;
        $gear->name = $request->name;
        $gear->description = $request->description;
        $gear->link = $request->link;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/gear'), $filename);

            $gear->image = $filename;
        }

        $gear->save();
        return redirect()->route('dashboard.gear')->with('success', 'Gear created successfully');
    }

    public function editGear($id)
    {
        $gear = Gear::findOrFail($id);
        return view('dashboards.gears.edit', ['header' => 'Edit Gear', 'gear' => $gear]);
    }

    public function updateGear(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|string',
            'name' => 'required|string',
            'description' => 'required',
            'link' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $gear = Gear::findOrFail($id);
        $gear->brand = $request->brand;
        $gear->name = $request->name;
        $gear->description = $request->description;
        $gear->link = $request->link;

        if ($request->hasFile('image')) {
            if ($gear->image && file_exists(public_path('images/gear/' . $gear->image))) {
                unlink(public_path('images/gear/' . $gear->image));
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/gear'), $fileName);

            $gear->image = $fileName;
        }

        $gear->save();
        return redirect()->route('dashboard.gear')->with('success', 'Gear updated successfully');
    }

    public function destroyGear($id)
    {
        $gear = Gear::findOrFail($id);

        if ($gear->image) {
            Storage::disk('public')->delete($gear->image);
        }

        $gear->delete();
        return redirect()->route('dashboard.gear')->with('success', 'Gear deleted successfully.');
    }

    // Project Focus
    public function showProject()
    {
        $projects = Project::all();
        return view('dashboards.projects.index', ['header' => 'Project', 'projects' => $projects]);
    }

    public function createProject()
    {
        return view('dashboards.projects.create', ['header' => 'Create Project']);
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|string|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project = new Project();
        $project->type = $request->type;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->link = $request->link;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/project'), $filename);

            $project->image = $filename;
        }

        $project->save();
        return redirect()->route('dashboard.project')->with('success', 'Project created successfully');
    }

    public function editProject($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboards.projects.edit', ['header' => 'Edit Project', 'project' => $project]);
    }

    public function updateProject(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string',
            'name' => 'required|string',
            'description' => 'required',
            'link' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project = Project::findOrFail($id);
        $project->type = $request->type;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->link = $request->link;

        if ($request->hasFile('image')) {
            if ($project->image && file_exists(public_path('images/project/' . $project->image))) {
                unlink(public_path('images/project/' . $project->image));
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/project'), $fileName);

            $project->image = $fileName;
        }

        $project->save();
        return redirect()->route('dashboard.project')->with('success', 'Project updated successfully');
    }

    public function destroyProject(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard.project')->with('success', 'Project deleted successfully.');
    }
}

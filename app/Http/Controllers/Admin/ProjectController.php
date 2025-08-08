<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::query()->orderBy('id', 'desc')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->link = $request->input('link');

        $file_name = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $file_name);

        $project->image = $file_name;
        $project->save();

        return redirect()->route('admin.projects.index')->with('flash_message', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = Project::query()->find($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $project = Project::query()->find($id);

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->link = $request->input('link');

        if ($request->image != '') {
            $image = public_path() . '/images/' . $project->image;
            if (file_exists($image)) {
                unlink($image);
            }
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file_name);

            $project->image = $file_name;
        }

        $project->save();

        return redirect()->route('admin.projects.index')->with('flash_message', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::query()->find($id);
        $project->delete();
        return redirect()->route('admin.projects.index')->with('flash_message', 'Project deleted successfully.');
    }




}

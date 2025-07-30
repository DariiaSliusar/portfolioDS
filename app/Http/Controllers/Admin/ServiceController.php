<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()->latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $service = new Service();
        $service->title = $request->title;
        $service->icon = $request->icon;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin.services.index')->with('flash_message', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::query()->find($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $service = Service::query()->find($id);
        $service->title = $request->title;
        $service->icon = $request->icon;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin.services.index')->with('flash_message', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::query()->find($id);
        $service->delete();

        return redirect()->route('admin.services.index')->with('flash_message', 'Service deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::query()->latest()->get();
        return view('admin.medias.index', compact('medias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'icon' => 'required',
        ]);
        $media = new Media();
        $media->link = $request->link;
        $media->icon = $request->icon;
        $media->save();

        return redirect()->route('medias.index')->with('flash_message', 'Media created successfully!');
    }

    public function destroy($id)
    {
        $media = Media::query()->find($id);
        $media->delete();
        return redirect()->route('medias.index')->with('flash_message', 'Media deleted successfully!');
    }
}

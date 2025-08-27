<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::query()->latest()->first();
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $about = About::query()->latest()->first();

        $about->name = $request->name;
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->address = $request->address;
        $about->description = $request->description;
        $about->summary = $request->summary;
        $about->tagline = $request->tagline;

        if($request->home_image != '') {
            $image = public_path() . "/images/" . $about->home_image;
            if(file_exists($image)) {
                unlink($image);
            }
            $file_name = time() . '.' . $request->home_image->getClientOriginalExtension();
            $request->home_image->move(public_path('images'), $file_name);
            $about->home_image = $file_name;
        }

        if($request->banner_image != '') {
            $image = public_path() . "/images/" . $about->banner_image;
            if(file_exists($image)) {
                unlink($image);
            }
            $file_name = time() . '.' . $request->banner_image->getClientOriginalExtension();
            $request->banner_image->move(public_path('images'), $file_name);
            $about->banner_image = $file_name;
        }

        if($request->cv != '') {
            $image = public_path() . "/pdf/" . $about->cv;
            if(file_exists($image)) {
                unlink($image);
            }
            $file = time() . '.' . $request->cv->getClientOriginalExtension();
            $request->cv->move(public_path('images'), $file);
            $about->cv = $file;
        }

        $about->save();

        return redirect()->route('abouts.edit')->with('flash_message', 'About information updated successfully.');
    }
}

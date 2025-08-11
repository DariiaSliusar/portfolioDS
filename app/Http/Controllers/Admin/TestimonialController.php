<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testimonials = Testimonial::query()->orderBy('id', 'desc')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'function' => 'required',
            'testimony' => 'required',
            'rating' => 'required',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;

        $file_name = time() . '_' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);
        $testimonial->image = $file_name;

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('flash_message', 'Testimonial created successfully.');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::query()->find($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'function' => 'required',
            'testimony' => 'required',
            'rating' => 'required',
        ]);

        $testimonial = Testimonial::query()->find($id);
        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;

        if ($request->image != '') {
            $image = public_path() . '/images/' . $testimonial->image;
            if (file_exists($image)) {
                unlink($image);
            }
            $file_name = time() . '_' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $file_name);
            $testimonial->image = $file_name;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('flash_message', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::query()->find($id);
        $image = public_path() . '/images/' . $testimonial->image;
        if (file_exists($image)) {
            @unlink($image);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('flash_message', 'Testimonial deleted successfully.');
    }

}

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
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index()
    {
        $educations = Education::query()->orderBy('id', 'DESC')->get();

        return view('admin.educations.index', compact('educations'));
    }
}

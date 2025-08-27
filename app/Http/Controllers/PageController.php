<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Media;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $abouts = About::query()->orderBy('id', 'DESC')->get();
        $mediasHome = Media::query()->orderBy('id', 'DESC')->take(3)->get();
        $projectsCount = Project::all()->count();
        $experiencesCount = Experience::all()->count();
        $services = Service::query()->orderBy('id', 'DESC')->with('skills')->get();
        $educations = Education::query()->orderBy('id', 'DESC')->get();
        $experiences = Experience::query()->orderBy('id', 'DESC')->get();
        $projects = Project::query()->orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::query()->orderBy('id', 'DESC')->take(5)->get();

        return view('pages.home.index', compact(
            [
                'abouts',
                'mediasHome',
                'projectsCount',
                'experiencesCount',
                'services',
                'educations',
                'experiences',
                'projects',
                'testimonials'
            ]
        ));
    }
}

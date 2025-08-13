<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Message;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $skillCount = Skill::all()->count();
        $educationCount = Education::all()->count();
        $experienceCount = Experience::all()->count();
        $servicesCount = Service::all()->count();
        $projectsCount = Project::all()->count();
        $testimonialsCount = Testimonial::all()->count();
        $messageCount = Message::all()->count();
        $userCount = User::all()->count();

        $projects = Project::query()->orderBy('created_at', 'desc')->take(5)->get();
        $testimonials = Testimonial::query()->orderBy('created_at', 'desc')->take(5)->get();
        $skills = Skill::query()->orderBy('id', 'desc')->get();
        $services = Service::query()->orderBy('id', 'desc')->with('skills')->get();

        return view('admin.home.index', compact(
            [
                'skillCount',
                'educationCount',
                'experienceCount',
                'servicesCount',
                'projectsCount',
                'testimonialsCount',
                'messageCount',
                'userCount',
                'projects',
                'testimonials',
                'skills',
                'services'
            ]
        ));
    }
}

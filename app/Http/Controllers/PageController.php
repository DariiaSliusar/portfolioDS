<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $abouts = About::query()->orderBy('id', 'DESC')->get();
        return view('pages.home.index', compact(
            [
                'abouts'
            ]
        ));
    }
}

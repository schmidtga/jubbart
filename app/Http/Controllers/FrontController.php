<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function home()
    {
        $home = Home::orderBy('order', 'ASC')->get();

        return view('pages/home', compact('home'));
    }

    public function project(Request $request)
    {
        $slug = $request->slug;
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('pages/project', compact('project'));
    }

}

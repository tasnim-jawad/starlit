<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Botble\RealEstate\Models\Project;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // $projects = Project::orderBy('id','DESC')
        //     ->with([
        //         'customFields',    
        //     ])
        //     ->limit(6)->get();
        // dd($projects->toArray());
        $projects = [];
        return view('frontend.pages.about.about',compact('projects'));
    }
    
}

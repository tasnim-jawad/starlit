<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use Botble\RealEstate\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        // $projects = Project::orderBy('id','DESC')
        //     ->with([
        //         'customFields',    
        //     ])
        //     ->limit(6)->get();
        return view('frontend.pages.home.home');
    }

}

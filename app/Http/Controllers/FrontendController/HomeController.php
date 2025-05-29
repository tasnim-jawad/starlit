<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use Botble\RealEstate\Models\Project;

use App\Modules\Management\BannerManagement\Banner\Models\Model as Banner;
use App\Modules\Management\AboutUsManagement\AboutUs\Models\Model as AboutUs;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::latest()->first();
        $about_us = AboutUs::latest()->first();
        // dd($banners)->toArray();
        return view('frontend.pages.home.home', compact('banner','about_us'));
    }

}

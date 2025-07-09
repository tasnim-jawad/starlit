<?php

namespace App\Modules\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class FrontendController extends Controller
{

    public function HomePage()
    {
        return Inertia::render('HomePage/Index', [
            'event' => [
                'title' => 'Home Page',
            ]
        ]);
    }
    public function AboutUsPage()
    {
        return Inertia::render('AboutUs/Index', [
            'event' => [
                'title' => 'About Us',
            ]
        ]);
    }
}

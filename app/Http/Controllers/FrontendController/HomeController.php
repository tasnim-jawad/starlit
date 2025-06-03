<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use Botble\RealEstate\Models\Project;

use App\Modules\Management\BannerManagement\Banner\Models\Model as Banner;
use App\Modules\Management\AboutUsManagement\AboutUs\Models\Model as AboutUs;
use App\Modules\Management\AtAGlanceManagement\AtAGlance\Models\Model as AtaGlance;
use App\Modules\Management\OurTeamManagement\OurTeam\Models\Model as OurTeam;
use App\Modules\Management\TodaySellsManagement\TodaySells\Models\Model as TodaySells;
use App\Modules\Management\OurServiceManagement\OurService\Models\Model as OurService;
use App\Modules\Management\TestimonialManagement\Testimonial\Models\Model as Testimonial;
use App\Modules\Management\BlogManagement\Blog\Models\Model as Blog;
use App\Modules\Management\PropertyManagement\Property\Models\Model as Property;
use App\Modules\Management\PropertyManagement\PropertyCategory\Models\Model as PropertyCategory;



class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::latest()->first();
        $about_us = AboutUs::latest()->first();
        $at_a_glance = AtaGlance::latest()->limit(4)->get();
        $our_team = OurTeam::latest()->limit(4)->get();
        $today_sells = TodaySells::latest()->first();
        $our_services = OurService::latest()->limit(3)->get();
        $testimonials = Testimonial::latest()->limit(3)->get();
        $blogs = Blog::with('blog_category')
                ->where('status', 'active')
                ->inRandomOrder()
                ->get();
        $properties = Property::with('category')
                ->where('status', 'active')
                ->inRandomOrder()
                ->latest()->limit(3)->get();
        $property_category_list = PropertyCategory::orderBy('name', 'asc')->get();
        // dd($property_category_list->toArray());
        // dd($about_us?->video_url);
        return view('frontend.pages.home.home', 
                compact(
                    'banner',
                    'about_us', 
                    'at_a_glance',
                    'our_team',
                    'today_sells',
                    'our_services',
                    'testimonials',
                    'properties',
                    'blogs',
                    'property_category_list'

                ));
    }

}

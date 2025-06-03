<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Management\PropertyManagement\PropertyCategory\Models\Model as PropertyCategory;

class GalleryController extends Controller
{
    public function index()
    {
        $property_category_list = PropertyCategory::orderBy('name', 'asc')->get();
        return view('frontend.pages.gallery.gallery',
            compact('property_category_list')
        );
    }
    public function image()
    {
        return view('frontend.pages.gallery.image.image');
    } 
    public function video()
    {
        return view('frontend.pages.gallery.video.video');
    } 
}

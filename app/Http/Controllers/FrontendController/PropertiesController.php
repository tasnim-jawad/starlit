<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Management\PropertyManagement\Property\Models\Model as Property;

class PropertiesController extends Controller
{
    public function index()
    {
        $property_category_list = [
            'Luxury',
            'Classic',
            'Welness Communities',
            'Comercial',
            'Ongoing',
            'upcoming',
            'Completed'
        ];
        
        $properties_data = [];
        
        foreach ($property_category_list as $name) {
            $properties = Property::with('category')
                ->where('status', 'active')
                ->whereHas('category', function($q) use ($name) {
                    $q->where('name', $name);
                })
                ->inRandomOrder()
                ->latest()
                ->limit(3)
                ->get();
        
            $properties_data[$name] = $properties;
        }
        // dd($properties_data['Comercial']);
        return view('frontend.pages.properties.properties',
            compact('property_category_list','properties_data')
        );
    }
    public function luxury()
    
    {
        $properties = Property::with('category')
            ->where('status', 'active')
            ->whereHas('category', function($q) {
                $q->where('name', 'Luxury');
            })
            ->inRandomOrder()
            ->latest()
            ->get();

        return view('frontend.pages.properties.luxury.luxury',
            compact('properties')
        );
    }
    public function comercial()
    {
        $properties = Property::with('category')
            ->where('status', 'active')
            ->whereHas('category', function($q) {
                $q->where('name', 'Comercial');
            })
            ->inRandomOrder()
            ->latest()
            ->get();
        return view('frontend.pages.properties.comercial.comercial',
            compact('properties')
        );
    }
    public function classic()
    {
        $properties = Property::with('category')
            ->where('status', 'active')
            ->whereHas('category', function($q) {
                $q->where('name', 'Classic');
            })
            ->inRandomOrder()
            ->latest()
            ->get();
        return view('frontend.pages.properties.classic.classic',
            compact('properties')
        );
    }
    public function wellness()
    {
        $properties = Property::with('category')
            ->where('status', 'active')
            ->whereHas('category', function($q) {
                $q->where('name', 'Welness Communities');
            })
            ->inRandomOrder()
            ->latest()
            ->get();
        return view('frontend.pages.properties.wellness.wellness',
            compact('properties')
        );
    }
    public function ongoing()
    {
        $properties = Property::with('category')
            ->where('status', 'active')
            ->whereHas('category', function($q) {
                $q->where('name', 'Ongoing');
            })
            ->inRandomOrder()
            ->latest()
            ->get();
        return view('frontend.pages.properties.ongoing.ongoing',
            compact('properties')
        );
    }
    public function upgoing()
    {
        $properties = Property::with('category')
            ->where('status', 'active')
            ->whereHas('category', function($q) {
                $q->where('name', 'upcoming');
            })
            ->inRandomOrder()
            ->latest()
            ->get();
        return view('frontend.pages.properties.upgoing.upgoing',
            compact('properties')
        );
    }
    public function completed()
    {
        $properties = Property::with('category')
            ->where('status', 'active')
            ->whereHas('category', function($q) {
                $q->where('name', 'Completed');
            })
            ->inRandomOrder()
            ->latest()
            ->get();
        return view('frontend.pages.properties.completed.completed',
            compact('properties')
        );
    }
    public function details(Request $request, $id)
    {
        // Check if it's numeric
        if (!is_numeric($id)) {
            abort(404); // or return redirect()->back()->with('error', 'Invalid ID');
        }
        
        $property = Property::with('category')
            ->where('id', $id)
            ->where('status', 'active')
            ->firstOrFail();
        // dd($property);
        return view('frontend.pages.properties.property_details.property_details', compact('property'));
    }

}

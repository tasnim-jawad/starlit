<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Modules\Management\PropertyManagement\PropertyCategory\Models\Model as PropertyCategory;

class NewsController extends Controller
{
    public function index()
    {
        $blog_category = DB::table('blog_categories')
            ->leftJoin('blogs', 'blog_categories.id', '=', 'blogs.blog_category_id')
            ->select('blog_categories.*', DB::raw('COUNT(blogs.id) as blog_count'))
            ->groupBy('blog_categories.id')
            ->orderBy('blog_count', 'desc')
            ->get();


        $blogs = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name')
            ->paginate(10);

        $top_rated_blogs_query = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name');

        $total_blogs = $top_rated_blogs_query->count();

        if ($total_blogs > 5) {
            $top_rated_blogs = $top_rated_blogs_query
                ->inRandomOrder()
                ->limit(5)
                ->get();
        } else {
            $top_rated_blogs = $top_rated_blogs_query->get();
        }


        $latest_blogs = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name')
            ->orderBy('blogs.created_at', 'desc')
            ->limit(5)
            ->get();

        $property_category_list = PropertyCategory::orderBy('name', 'asc')->get();
        return view(
            'frontend.pages.news.news',
            compact('blogs', 'blog_category', 'top_rated_blogs', 'latest_blogs')
        );
    }
    
    public function news_details($slug)
    {
        $blog = DB::table('blogs')->where('slug', $slug)->first();

        $blog_category = DB::table('blog_categories')
            ->leftJoin('blogs', 'blog_categories.id', '=', 'blogs.blog_category_id')
            ->select('blog_categories.*', DB::raw('COUNT(blogs.id) as blog_count'))
            ->groupBy('blog_categories.id')
            ->orderBy('blog_count', 'desc')
            ->get();

        $top_rated_blogs_query = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name');

        $total_blogs = $top_rated_blogs_query->count();

        if ($total_blogs > 5) {
            $top_rated_blogs = $top_rated_blogs_query
                ->inRandomOrder()
                ->limit(5)
                ->get();
        } else {
            $top_rated_blogs = $top_rated_blogs_query->get();
        }


        $latest_blogs = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name')
            ->orderBy('blogs.created_at', 'desc')
            ->limit(5)
            ->get();

        
        return view('frontend.pages.news.news_details.news_details', 
        compact('top_rated_blogs', 'latest_blogs', 'blog_category','blog'));
    }


    public function news_category($slug)
    {
        $category = DB::table('blog_categories')
            ->where('slug', $slug)
            ->first();

        $blog_category = DB::table('blog_categories')
            ->leftJoin('blogs', 'blog_categories.id', '=', 'blogs.blog_category_id')
            ->select('blog_categories.*', DB::raw('COUNT(blogs.id) as blog_count'))
            ->groupBy('blog_categories.id')
            ->orderBy('blog_count', 'desc')
            ->get();


        $blogs = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name')
            ->where('blog_categories.slug', $slug)
            ->paginate(10);

        $top_rated_blogs_query = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name');

        $total_blogs = $top_rated_blogs_query->count();

        if ($total_blogs > 5) {
            $top_rated_blogs = $top_rated_blogs_query
                ->inRandomOrder()
                ->limit(5)
                ->get();
        } else {
            $top_rated_blogs = $top_rated_blogs_query->get();
        }


        $latest_blogs = DB::table("blogs")
            ->join('blog_categories', 'blogs.blog_category_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.title as category_name')
            ->orderBy('blogs.created_at', 'desc')
            ->limit(5)
            ->get();

        return view(
            'frontend.pages.news.news',
            compact('blogs', 'blog_category', 'top_rated_blogs', 'latest_blogs', 'category')
        );
    }

    public function ajaxSearch(Request $request)
    {
        $query = $request->get('search');

        $blogs = DB::table("blogs")
            ->where('title', 'like', "%{$query}%")
            ->limit(10)
            ->get();

        if ($blogs->count() > 0) {
            $output = '';
            foreach ($blogs as $blog) {
                $output .= '<a href="' . route('news_details', $blog->slug) . '">' . e($blog->title) . '</a>';
            }
        } else {
            $output = '<p>No results found</p>';
        }

        return response($output);
    }
}

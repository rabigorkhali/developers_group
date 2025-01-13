<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Post;
use App\Models\Testimonial;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {

            $data = [];
            $data['sliderPlots']=Event::where('status', 1)->where('show_in_slider', 1)->orderby('created_at', 'desc')->paginate(4);
            $data['allPlots']=Event::where('status', 1)->orderby('created_at', 'desc')->paginate(8);
            $data['allTestimonials']=Testimonial::where('status', 1)->orderby('position')->get();
            $data['allBlogs']=Post::where('status', 1)->orderby('created_at', 'desc')->paginate(8);

            return view('frontend.home', $data);
        } catch (\Throwable $th) {
        }
    }
}

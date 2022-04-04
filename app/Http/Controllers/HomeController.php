<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Organization;
class HomeController extends Controller
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
        $cities = Internship::select('city')->distinct()->get();
        $industries = Internship::select('industry')->distinct()->get();
        $featured_internships = Internship::inRandomOrder()->limit(3)->get();
        return view('home', compact('cities', 'industries', 'featured_internships'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }
}


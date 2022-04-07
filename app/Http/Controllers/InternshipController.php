<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\Organization;
use Illuminate\Http\Request;
use DB;
class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $internships = Internship::paginate(4);
    //     return view('internships.index', compact('internships'));
    // }

    // public function show_by_city($city)
    // {
    //     $internships = Internship::paginate(4)->where('city', $city)->get();
    //     return view('internships.index', compact('internships'));
    // }

    // public function show_by_title($title)
    // {
    //     $internships = Internship::where('title', $title)->get();
    //     return view('internships.index', compact('internships'));
    // }

    // public function show_by_industry($industry)
    // {
    //     $internships = Internship::where('industry', $industry)->get();
    //     return view('internships.index', compact('internships'));
    // }

    public function index(Request $request)
    {

        $internship = Internship::query();

        if($request->filled('city')) {
            $internship->where('city', $request->city);
        }

        if($request->filled('industry')) {
            $internship->where('industry', $request->industry);
        }

        return view('internships.index', [
            'internships' => $internship->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}

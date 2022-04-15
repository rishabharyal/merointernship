<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\Organization;
use Illuminate\Http\Request;
use DB;
class InternshipController extends Controller
{
    /**
     * @param Request $request
     * @param $type
     * @param $value
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function index(Request $request, $type = "", $value = ""): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $internship = Internship::query();

        $allowedTypes = [
            'city' => 'city',
            'industry' => 'industry'
        ];

        if ($type && $value && isset($allowedTypes[$type])) {
            $internship = $internship->where($type, $value);
        }

        if($request->filled('city')) {
            $internship->where('city', $request->city);
        }

        if($request->filled('industry')) {
            $internship->where('industry', $request->industry);
        }

        $internship = $internship->orderBy('is_featured', 'DESC');

        return view('internships.index', [
            'internships' => $internship->paginate(12)
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

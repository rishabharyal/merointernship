<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Internship;
use App\Models\Organization;
use Illuminate\Http\Request;
use DB;
use Faker\Provider\ar_EG\Internet;
use Illuminate\Support\Facades\Auth;

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
        $cities = DB::table('internships')->select('city')->distinct()->get()->pluck('city');
        $industries = DB::table('internships')->select('industry')->distinct()->get()->pluck('industry');

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

        if($request->filled('type')) {
            $internship->where('type', $request->type);
        }

        if($request->filled('duration')) {
            $internship->where('duration', $request->duration);
        }

        if($request->filled('is_wfh')) {
            $internship->where('is_wfh', $request->is_wfh);
        }

        if($request->filled('is_parttime')) {
            $internship->where('is_parttime', $request->is_parttime);
        }

        if($request->filled('is_for_women')) {
            $internship->where('is_for_women', $request->is_for_women);
        }

        if($request->filled('is_with_joboffer')) {
            $internship->where('is_with_joboffer', $request->is_with_joboffer);
        }

        $internship = $internship->orderBy('is_featured', 'DESC');

        return view('internships.index', [
            'internships' => $internship->paginate(12),
            'cities' => $cities,
            'industries' => $industries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::where('user_id', Auth::id())->get();
        return view('internships.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Internship $internship)
    {
        $internship->user_id = Auth::id();
        $internship->title = $request->get('title');
        $internship->description = $request->get('description');
        $internship->city = $request->get('city');
        $internship->industry = $request->get('industry');
        $internship->organization_id = $request->get('organization_id');
        $internship->qualifications = $request->get('qualifications');
        $internship->type = $request->get('type');
        $internship->duration = $request->get('duration');
        $internship->time_from = $request->get('time_from');
        $internship->time_to = $request->get('time_to');
        $internship->deadline = $request->get('deadline');
        $internship->is_published = $request->get('is_published');
        $internship->is_featured = $request->get('is_featured');
        $internship->is_wfh = $request->get('is_wfh');
        $internship->is_parttime = $request->get('is_parttime');
        $internship->is_for_women = $request->get('is_for_women');
        $internship->is_with_joboffer = $request->get('is_with_joboffer');

        $internship->save();

        return redirect()->back()->with('success', 'Internship added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internships)
    {
        $internships = $internships->where('user_id', Auth::id());
        return view('internships.show', [
            'internships' => $internships->paginate(12)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        $organizations = Organization::where('user_id', Auth::id())->get();
        return view('internships.edit', compact('internship', 'organizations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $internship = Internship::find($id);
        $internship->user_id = Auth::id();
        $internship->title = $request->get('title');
        $internship->description = $request->get('description');
        $internship->city = $request->get('city');
        $internship->industry = $request->get('industry');
        $internship->organization_id = $request->get('organization_id');
        $internship->qualifications = $request->get('qualifications');
        $internship->type = $request->get('type');
        $internship->duration = $request->get('duration');
        $internship->time_from = $request->get('time_from');
        $internship->time_to = $request->get('time_to');
        $internship->deadline = $request->get('deadline');
        $internship->is_published = $request->get('is_published');
        $internship->is_featured = $request->get('is_featured');
        $internship->is_wfh = $request->get('is_wfh');
        $internship->is_parttime = $request->get('is_parttime');
        $internship->is_for_women = $request->get('is_for_women');
        $internship->is_with_joboffer = $request->get('is_with_joboffer');

        $internship->save();
        
        return redirect()->back()->with('success', 'Internship added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        $internship->delete();

        return redirect()->back()->with('success', 'Internship deleted successfully!');
    }
}

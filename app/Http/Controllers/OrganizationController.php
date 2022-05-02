<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Plank\Mediable\Facades\MediaUploader;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('organizations.index');
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
        $request->validate([
            'title' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'description' => 'required|'
        ]);
        $organization = new Organization;

        $organization->title = $request->title;
        $organization->address = $request->address;
        $organization->city = $request->city;
        $organization->description = $request->description;
        $organization->user_id = Auth::id();
        $organization->logo_path = $request->logo;

        $organization->save();

        if ($request->has('logo')) {
            $media = MediaUploader::fromSource($request->file('logo'))->upload();
            $organization->attachMedia($media);
        }

        return redirect('/account');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $organization = Organization::where('user_id', Auth::id());
        return view('organizations.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'description' => 'required|'
        ]);

        $organization = Organization::find($id);
        $organization->title = $request->title;
        $organization->address = $request->address;
        $organization->city = $request->city;
        $organization->description = $request->description;
        $organization->user_id = Auth::id();
        $organization->logo_path = $request->logo;

        $organization->save();

        if ($request->has('logo')) {
            $media = MediaUploader::fromSource($request->file('logo'))->upload();
            $organization->attachMedia($media);
        }

        return redirect('/account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}

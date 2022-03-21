<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function index(Request $request, Organization $organizations)
    {
        if ($request->has('search')) {
            $search = $request->get('search');
            $organizations = $organizations->where('title', 'LIKE', "%$search%")
                ->orWhere('description', 'LIKE', "%$search%")
                ->orWhere('address', 'LIKE', "%$search%")
            ->orWhere('city', 'LIKE', "%$search%");
        }

        $organizations = $organizations->orderBy('id','DESC')->paginate(15);

        return view('admin.organization.index', compact( 'organizations'));
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
    public function store(Request $request, Organization $organization)
    {
        $organization->title=$request->get('title');
        $organization->address=$request->get('address');
        $organization->city=$request->get('city');
        $organization->description=$request->get('description');

        if ($request->has('image')) {
            $media = MediaUploader::fromSource($request->file('image'))->upload();
            $organization->attachMedia($media);
        }

        return redirect()->back()->with('success', 'Organization added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $organization->title=$request->get('title');
        $organization->address=$request->get('address');
        $organization->city=$request->get('city');
        $organization->description=$request->get('description');

        if ($request->has('image')) {
            $media = MediaUploader::fromSource($request->file('image'))->upload();
            $organization->attachMedia($media);
        }

        return redirect()->back()->with('success', 'Organization updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return redirect()->back()->with('success', 'Organization deleted successfully!');
    }
}

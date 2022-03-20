<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOrUpdateInternshipRequest;
use App\Models\Internship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Plank\Mediable\Facades\MediaUploader;

class InternshipController extends Controller
{
    /**
     * @param Internship $internships
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function index(Internship $internships, Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        if ($request->has('search')) {
            $search = $request->get('search');
            $internships = $internships->where('title', 'LIKE', "%$search%")
                ->orWhere('description', 'LIKE', "%$search%")
                ->orWhere('qualifications', 'LIKE', "%$search%");
        }

        /** @var User $user */
        $user = Auth::user();
        if (!$user->hasRole('Admin')) {
            $internships = $internships->where('user_id', $user->id);
        }

        $internships = $internships->paginate(15);

        return view('admin.internships.index', compact('internships'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('amdin.internships.create');
    }

    /**
     * @param Request $request
     * @param Internship $internship
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Plank\Mediable\Exceptions\MediaUpload\ConfigurationException
     * @throws \Plank\Mediable\Exceptions\MediaUpload\FileExistsException
     * @throws \Plank\Mediable\Exceptions\MediaUpload\FileNotFoundException
     * @throws \Plank\Mediable\Exceptions\MediaUpload\FileNotSupportedException
     * @throws \Plank\Mediable\Exceptions\MediaUpload\FileSizeException
     */
    public function store(CreateOrUpdateInternshipRequest $request, Internship $internship): \Illuminate\Http\RedirectResponse
    {
        $internship->title = $request->get('title');
        $internship->description = $request->get('description');
        $internship->city = $request->get('ciry');
        $internship->company = $request->get('company');
        $internship->qualifications = $request->get('qualifications');
        $internship->user_id = Auth::id();
        $internship->save();

        if ($request->has('image')) {
            $media = MediaUploader::fromSource($request->file('image'))->upload();
            $internship->attachMedia($media);
        }

        return redirect()->back()->with('success', 'Internship added successfully');

    }

    public function edit(Internship $internship): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.internships.edit', compact('internship'));
    }

    /**
     * @param Internship $internship
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function show(Internship $internship): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.internships.show', compact('internship'));
    }

    public function update(Internship $internship, CreateOrUpdateInternshipRequest $request, ) {
        $internship->title = $request->get('title');
        $internship->description = $request->get('description');
        $internship->city = $request->get('ciry');
        $internship->company = $request->get('company');
        $internship->qualifications = $request->get('qualifications');
        $internship->is_published = $request->get('is_published');
        $internship->save();

        if ($request->has('image')) {
            $media = MediaUploader::fromSource($request->file('image'))->useHashForFilename()->upload();
            $internship->attachMedia($media, 'default');
        }

        return redirect()->back()->with('success', 'Internship added successfully');

    }

    /**
     * @param Internship $internship
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Internship $internship): \Illuminate\Http\RedirectResponse
    {
        $internship->delete();

        return redirect()->back()->with('success', 'Internship deleted successfully!');
    }
}

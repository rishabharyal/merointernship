@extends('layouts.app')

@section('content')
    <section id="internship-crud" class="p-4">
        <div class="row">
            <div class="col-12 pt-2 pb-2 border-bottom">
                <div class="card">
                    <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                            <strong>Add Internship</strong>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form action="{{ action('InternshipController@store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="" id="title" value="{{ old('title') }}">
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="title">Description</label>
                                            <textarea class="form-control" name="description" placeholder="" id="description" rows="4">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="qualifications">Qualification</label>
                                            <textarea class="form-control" name="qualifications" placeholder="" id="qualifications" rows="4">{{ old('qualifications') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="internship">Internship</option>
                                                <option value="freshjob">Fresher Job</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="industry">Category</label>
                                            <input type="text" class="form-control" name="industry" placeholder="" id="industry" value="{{ old('industry') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="" id="city" value="{{ old('city') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="duration">Duration</label>
                                            <input type="text" class="form-control" name="duration" placeholder="" id="duration" value="{{ old('duration') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="is_published">Status</label>
                                            <select name="is_published" id="is_published" class="form-control">
                                                <option value="0">Not Published</option>
                                                <option value="1">Published</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="is_featured">Featured</label>
                                            <select name="is_featured" id="is_featured" class="form-control">
                                                <option value="0">Not Featured</option>
                                                <option value="1">Featured</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <label for="is_wfh">Work From Home</label>
                                            <select name="is_wfh" id="is_wfh" class="form-control">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="is_parttime">Part Time</label>
                                            <select name="is_parttime" id="is_parttime" class="form-control">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="is_for_women">For Women Only</label>
                                            <select name="is_for_women" id="is_for_women" class="form-control">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="is_with_joboffer">Has Job Offer</label>
                                            <select name="is_with_joboffer" id="is_with_joboffer" class="form-control">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                        <br>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- {{-- <div class="row">
            <div class="col-12 pt-2">
                <h5>All Internships</h5>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Requirements</th>
                        <th>Description</th>
                        <th>Is published?</th>
                        <th>Is featured?</th>
                        <th>Organization_Name</th>
                        <th style="width: 100px">Action</th>
                    </tr>
            @foreach($internships as $internship)
                <tr>
                    <td>{{ $internship->id }}</td>
                    <td>{{ $internship->title }}</td>
                    <td>{{ $internship->qualifications }}</td>
                    <td>{{ $internship->description }}</td>
                    <td>{{$internship->is_published? "Yes" :"No"}}</td>
                    <td>{{$internship->is_featured? "Yes" :"No" }}</td>
                    <td>{{$internship->organization->title}}</td>
                    <td>
                        <form action="{{ action('Admin\InternshipController@destroy', $internship->id) }}" method="Post">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-outline-info btn-sm" title="Edit" href="{{ action('Admin\InternshipController@edit', $internship->id) }}">
                                ✍️
                            </a>
                            <button class="btn btn-outline-danger btn-sm" title="Delete">
                                ❌
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
                </table>
            </div>
        </div>

        {!! $internships->links() !!} --}} -->
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section id="internship-crud" class="p-4">
        <div class="row">
            <div class="col-12 pt-2 pb-2 border-bottom">
                @if($errors->any())
                    <div class="alert alert-warning">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </div>
                @endif
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
                                                <option value="Internship">Internship</option>
                                                <option value="Fresher Job">Fresher Job</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="industry">Category</label>
                                            <select name="industry" id="industry" value="{{ old('industry') }}">
                                                <option selected disabled>Please select a category</option>
                                                <option value="Graphics-Design">Graphics Design</option>
                                                <option value="Web-Development">Web Development</option>
                                                <option value="Free-Writing">Free Writing</option>
                                                <option value="Banks">Banks</option>
                                                <option value="Ecommerce">Ecommerce</option>
                                                <option value="Digital-Marketing">Digital Marketing</option>
                                            </select>
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
                                            <label for="duration">Duration (in months)</label>
                                            <input type="text" class="form-control" name="duration" placeholder="" id="duration" value="{{ old('duration') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="organization_id">Organization</label>
                                            <select name="organization_id" id="organization_id" class="form-control">
                                                @foreach ($organizations as $organization)
                                                <option value="{{ $organization->id }}">{{ $organization->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="deadline">Deadline</label>
                                            <input type="date" name="deadline" id="deadline">
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

        <div class="row">
            <div class="col-12 pt-2">
                <h5>All Internships</h5>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Qualifications</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>City</th>
                        <th>Duration</th>
                        <th>Organization Name</th>
                        <th>Is published?</th>
                        <th>Is featured?</th>
                        <th>Is Work From Home?</th>
                        <th>Is Part Time?</th>
                        <th>Is For Women Only?</th>
                        <th>Has a Job Offer?</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    @foreach($internships as $internship)
                        <tr>
                            <td>{{ $internship->title }}</td>
                            <td>{{ $internship->description }}</td>
                            <td>{{ $internship->qualifications }}</td>
                            <td>{{ $internship->type }}</td>
                            <td>{{ $internship->industry }}</td>
                            <td>{{ $internship->city }}</td>
                            <td>{{ $internship->duration }}</td>
                            <td>{{ $internship->organization->title }}</td>
                            <td>{{ $internship->is_published? "Yes" :"No" }}</td>
                            <td>{{ $internship->is_featured? "Yes" :"No" }}</td>
                            <td>{{ $internship->is_wfh? "Yes" :"No" }}</td>
                            <td>{{ $internship->is_parttime? "Yes" :"No" }}</td>
                            <td>{{ $internship->is_for_women? "Yes" :"No" }}</td>
                            <td>{{ $internship->is_with_joboffer? "Yes" :"No" }}</td>
                            <td>
                                <form action="{{ action('InternshipController@destroy', $internship->id) }}" method="Post">
                                    @method('DELETE')
                                    @csrf
                                    <a class="btn btn-outline-info btn-sm" title="Edit" href="{{ action('InternshipController@edit', $internship->id) }}">
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

        {!! $internships->links() !!}
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section id="internship-crud" class="p-4">
        <div class="row">
            <div class="col-12 pt-2 pb-2 border-bottom">
                <div class="card">
                    <div class="card-header">
                            <strong>Internship Detail</strong>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Title</h1>
                                        <p>{{ $internship->title }}</p>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Description</h1>
                                        <p>{{ $internship->description }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Qualification</h1>
                                        {{ $internship->qualifications }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Type</h1>
                                        {{ $internship->type }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Category</h1>
                                       {{ $internship->industry }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>City</h1>
                                        {{ $internship->city }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Duration</h1>
                                        {{ $internship->duration }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Organization</h1>
                                        {{ $internship->organization->title }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Time From</h1>
                                        {{ $internship->time_from }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Time To</h1>
                                        {{ $internship->time_to }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Deadline</h1>
                                        {{ $internship->deadline }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1>Status</h1>
                                        {{ $internship->status }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1 for="is_featured">Featured</h1>
                                        <select name="is_featured" id="is_featured" class="form-control">
                                            <option value="0">Not Featured</option>
                                            <option value="1">Featured</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <h1 for="is_wfh">Work From Home</h1>
                                        <select name="is_wfh" id="is_wfh" class="form-control">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1 for="is_parttime">Part Time</h1>
                                        <select name="is_parttime" id="is_parttime" class="form-control">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1 for="is_for_women">For Women Only</h1>
                                        <select name="is_for_women" id="is_for_women" class="form-control">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <h1 for="is_with_joboffer">Has Job Offer</h1>
                                        <select name="is_with_joboffer" id="is_with_joboffer" class="form-control">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

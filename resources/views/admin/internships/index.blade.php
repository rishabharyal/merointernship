@extends('layouts.admin')

@section('content')
    <section id="internship-crud" class="p-4">
        <div class="row">
            <div class="col-12 border-bottom pb-2">
                <form action="{{ action('Admin\InternshipController@index') }}" method="GET">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <strong>Search</strong>
                                <input type="text" class="form-control" name="search" placeholder="Search" value="{{ request()->get('search') }}">
                            </div>
                        </div>
                        <div class="col-1">
                            <br>
                            <button class="btn btn-info d-block w-100 text-light">GO</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
                            <form action="{{ action('Admin\InternshipController@store') }}" method="post" enctype="multipart/form-data">
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
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="" id="city" value="{{ old('city') }}">
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

        {!! $internships->links() !!}
    </section>
@endsection

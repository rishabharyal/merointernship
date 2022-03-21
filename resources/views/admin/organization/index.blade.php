@extends('layouts.admin')

@section('content')
    <section id="organization-crud" class="p-4">
        <div class="row">
            <div class="col-12 border-bottom pb-2">
                <form action="{{ action('Admin\OrganizationController@index') }}" method="GET">
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
                            <strong>Add Organization</strong>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form action="{{ action('Admin\OrganizationController@store') }}" method="post" enctype="multipart/form-data">
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
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description" placeholder="" id="description" rows="4">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <textarea class="form-control" name="city" placeholder="" id="city" rows="4">{{ old('city') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" name="address" placeholder="" id="address" rows="4">{{ old('address') }}</textarea>
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

            <div class="row">
                <div class="col-12 pt-2">
                    <h5>All Organizations</h5>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Address</th>
                            <th>City</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                        @foreach($organizations as $organization)
                            <tr>
                                <td>{{ $organization->id }}</td>
                                <td>{{ $organization->title }}</td>
                                <td>{{ $organization->description }}</td>
                                <td>{{ $organization->address }}</td>
                                <td>{{ $organization->city }}</td>


                                <td>
                                    <form action="{{ action('Admin\OrganizationController@destroy', $organization->id) }}" method="Post">
                                        @method('DELETE')
                                        @csrf
                                        <a class="btn btn-outline-info btn-sm" title="Edit" href="{{ action('Admin\OrganizationController@edit', $organization->id) }}">
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

        {!! $organizations->links() !!}
    </section>
@endsection

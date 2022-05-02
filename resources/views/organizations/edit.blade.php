@extends('layouts.app')

@section('content')
    <section>
        <div>
            <div class="row m-4">
                <div class="col-3">
                    @include('components.sidebar')
                </div>
                <div class="col-9">
                    <div>
                        <form action="{{ action('OrganizationController@update', $organization->id) }}" method="POST">
                            {{ csrf_field() }}
                            <table class="table table-responsive-lg">
                                <tr>
                                    <td><label>Name of Your Company</label></td>
                                    <td><input type="text" name="title" placeholder="Eg. ABC Company" value="{{ $organization->title }}" required autocomplete="title" autofocus></td>
                                </tr>
                                <tr>
                                    <td><label>Address</label></td>
                                    <td><input type="text" name="address" value="{{ $organization->address }}" required autocomplete="address" autofocus></td>
                                </tr>
                                <tr>
                                    <td><label>City</label></td>
                                    <td><input type="text" name="city" value="{{ $organization->city }}" required autocomplete="city" autofocus></td>
                                </tr>
                                <tr>
                                    <td><label>Description</label></td>
                                    <td><input type="text" name="description" placeholder="Tell us about your company" value="{{ $organization->description }}" required autocomplete="description" autofocus></td>
                                </tr>
                                <tr>
                                    <td><label>Upload Logo of Your Company</label></td>
                                    <td><input type="file" name="logo"></td>
                                </tr>
                            </table>
                            {{ method_field('PUT') }}
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

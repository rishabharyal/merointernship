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
                        <form action="{{ action('AccountController@update', $user->id) }}" method="POST">
                            {{ csrf_field() }}
                            <table class="table table-responsive-lg">
                                <tr>
                                    <td><label for="Username">Username</label></td>
                                    <td><input type="text" name="name" id="name" value="{{ $user->name }}"></td>
                                </tr>
                                <tr>
                                    <td><label for="Username">Email</label></td>
                                    <td><input type="text" name="email" id="email" value="{{ $user->email }}"></td>
                                </tr>
                                <tr>
                                    <td><label for="Username">Phone Number</label></td>
                                    <td><input type="text" name="phone_number" id="phone_number" value="{{ $user->phone_number }}"></td>
                                </tr>
                                <tr>
                                    <td><label for="Username">City</label></td>
                                    <td><input type="text" name="city" id="city" value="{{ $user->city }}"></td>
                                </tr>
                                <tr>
                                    <td><label for="Username">Address</label></td>
                                    <td><input type="text" name="address" id="address" value="{{ $user->address }}"></td>
                                </tr>
                                <tr>
                                    <td><label for="Username">Education Level</label></td>
                                    <td><input type="text" name="educational_level" id="educational_level" value="{{ $user->educational_level }}"></td>
                                </tr>
                                <tr>
                                    <td><label for="Username">User Type</label></td>
                                    <td>
                                        <select name="user_type" id="user_type">
                                            <option value="company">Company</option>
                                            <option value="user">User</option>
                                        </select>
                                    </td>
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

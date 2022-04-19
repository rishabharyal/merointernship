@extends('layouts.app')

@section('content')
    <section>
        <div>
            <form action="{{ action('AccountController@update', $user->id) }}" method="POST">
                {{ csrf_field() }}
                <label for="Username">Username</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}">
                <label for="Username">Email</label>
                <input type="text" name="email" id="email" value="{{ $user->email }}">
                <label for="Username">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" value="{{ $user->phone_number }}">
                <label for="Username">City</label>
                <input type="text" name="city" id="city" value="{{ $user->city }}">
                <label for="Username">Address</label>
                <input type="text" name="address" id="address" value="{{ $user->address }}">
                <label for="Username">Education Level</label>
                <input type="text" name="education_level" id="education_level" value="{{ $user->education_level }}">
                <label for="Username">User Type</label>
                <input type="text" name="user_type" id="user_type" value="{{ $user->user_type }}">
                {{ method_field('PUT') }}
                <button type="submit">Update</button>
            </form>
        </div>
    </section>
@endsection
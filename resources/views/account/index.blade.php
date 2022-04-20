@extends('layouts.app')

@section('content')
    <section>
        <div>
            <table>
                <tr>
                    <td>Username</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>{{ $user->phone_number }}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>{{ $user->city }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td>Education Level</td>
                    <td>{{ $user->educational_level }}</td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td>{{ $user->user_type }}</td>
                </tr>
            </table>
        </div>
        <div>
            <a href="{{ action('AccountController@edit', $user->id) }}">Edit</a>
        </div>
    </section>
@endsection

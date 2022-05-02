@extends('layouts.app')

@section('content')
    <section>
        <div class="row m-4">
            <div class="col-3">
                @include('components.sidebar')
            </div>
            <div class="col-9">
                <div>
                    <table class="table table-responsive-lg">
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
            </div>
        </div>
    </section>
@endsection

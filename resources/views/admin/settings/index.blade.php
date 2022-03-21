@extends('layouts.admin');

@section('content')
    <section id="settings" class="p-4 mb-2">
    <div class="heading">
        <h2>Edit your profile</h2>
    </div>
    <div class="form-group row">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="">
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone_number" placeholder="">
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="city" placeholder="">
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" placeholder="">
                    </div>
                    <label for="education_level" class="col-sm-2 col-form-label">Education Level</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="education_level" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <button type="button" class="btn btn-success">Edit Changes</button>

    </section>
@endsection


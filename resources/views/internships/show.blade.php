@extends('layouts.app')

@section('content')
    <section id="internship-crud" class="p-4">
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
                    <td>{{ $internship->category }}</td>
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

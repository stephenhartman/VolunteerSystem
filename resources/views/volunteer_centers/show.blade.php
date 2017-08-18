@extends('layout')

@section('content')

    <h3>Volunteer Center Information</h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Name</td>
                <td>Street</td>
                <td>City</td>
                <td>State</td>
                <td>Zipcode</td>
                <td>Organization</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $volunteer_center->name }}</td>
                <td>{{ $volunteer_center->street }}</td>
                <td>{{ $volunteer_center->city }}</td>
                <td>{{ $volunteer_center->state }}</td>
                <td>{{ $volunteer_center->zipcode }}</td>
                <td>{{ $volunteer_center->organization }}</td>
                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-small btn-success" href="{{ URL::to('volunteer_centers/' . $volunteer_center->id . '/edit') }}">Edit Volunteer Center</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-small btn-warning" href="{{ URL::to('volunteer_centers/' . $volunteer_center->id) }}" data-method="delete" data-token="{{ csrf_token() }}" data-confirm="Are you sure you want to delete this volunteer center?">Delete Volunteer Center</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <h3>Opportunities</h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Name</td>
                <td>Event Date</td>
                <td>Start Time</td>
                <td>End Time</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($volunteer_center->opportunities as $opportunity)
                <tr>
                <td>{{ $opportunity->name }}</td>
                <td>{{ \Carbon\Carbon::parse($opportunity->event_day)->format('m/d/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($opportunity->start_time)->format('g:i A') }}</td>
                <td>{{ \Carbon\Carbon::parse($opportunity->end_time)->format('g:i A') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

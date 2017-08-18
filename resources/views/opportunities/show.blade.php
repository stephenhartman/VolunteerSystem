@extends('layout')

@section('content')

    <h3>Opportunity Information</h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Name</td>
                <td>Event Date</td>
                <td>Start Time</td>
                <td>End Time</td>
                <td>Location</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $opportunity->name }}</td>
                <td>{{ \Carbon\Carbon::parse($opportunity->event_day)->format('m/d/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($opportunity->start_time)->format('g:i A') }}</td>
                <td>{{ \Carbon\Carbon::parse($opportunity->end_time)->format('g:i A') }}</td>
                <td><a href="{{ URL::to('volunteer_centers/' . $opportunity->volunteer_center->id) }}">{{ $opportunity->volunteer_center->name }}</td>
                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-small btn-success" href="{{ URL::to('opportunities/' . $opportunity->id . '/edit') }}">Edit Opportunity</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-small btn-warning" href="{{ URL::to('opportunities/' . $opportunity->id) }}" data-method="delete" data-token="{{ csrf_token() }}" data-confirm="Are you sure you want to delete this opportunity?">Delete Opportunity</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@stop

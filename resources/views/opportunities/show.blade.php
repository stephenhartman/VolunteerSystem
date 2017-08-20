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
                            {{ Form::open(['method' => 'GET', 'route' => ['opportunities.edit', $opportunity->id]]) }}
                            {{ Form::button('<i class="glyphicon glyphicon-pencil"></i> Edit', array('type' => 'submit', 'class' => 'btn btn-warning')) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::open(['method' => 'DELETE', 'route' => ['opportunities.destroy', $opportunity->id], ]) }}
                            {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'data-id' => $opportunity->id, 'class' => 'btn btn-danger delete-button')) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@stop

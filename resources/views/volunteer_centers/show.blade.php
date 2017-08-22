@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h3>Volunteer Center Information</h3>
        </div>
        <div class="col-md-2">
            <a href="{{ route('volunteer_centers.opportunities.create', $volunteer_center->id) }}" class="btn btn-block btn-primary" style="margin-top: 18px">New Opportunity</a>
        </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
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
                                    {{ Form::open(['method' => 'GET', 'route' => ['volunteer_centers.edit', $volunteer_center->id]]) }}
                                    {{ Form::button('<i class="glyphicon glyphicon-pencil"></i> Edit', array('type' => 'submit', 'class' => 'btn btn-warning')) }}
                                    {{ Form::close() }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ Form::open(['method' => 'DELETE', 'route' => ['volunteer_centers.destroy', $volunteer_center->id], ]) }}
                                    {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'data-id' => $volunteer_center->id, 'class' => 'btn btn-danger delete-button', 'onclick' => "return confirm('Are you sure?')")) }}
                                    {{ Form::close() }}
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
                            <td><a href="{{ URL::to('volunteer_centers/' . $volunteer_center->id . '/opportunities/' . $opportunity->id) }}">{{ $opportunity->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($opportunity->event_day)->format('m/d/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($opportunity->start_time)->format('g:i A') }}</td>
                        <td>{{ \Carbon\Carbon::parse($opportunity->end_time)->format('g:i A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

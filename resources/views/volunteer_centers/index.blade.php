@extends('layout')

@section('content')

    <h1>All Volunteer Centers</h1>
        <div class="col-md-2">
            <a href="{{ route('volunteer_centers.opportunities.create', $volunteer_center->id) }}" class="btn btn-block btn-primary" style="margin-top: 18px">New Opportunity</a>
        </div>
        @foreach ($volunteer_centers as $volunteer_center)
            <div>
                <a href="{{ URL::to($volunteer_center->id }}">{{ $volunteer_center->name }}</a>
            </div>
    @endforeach
@stop

@extends('layout')

@section('content')

    <h1>All Volunteer Centers</h1>

        @foreach ($volunteer_centers as $volunteer_center)
            <div>
                <a href="{{ URL::to($volunteer_center->id }}">{{ $volunteer_center->name }}</a>
            </div>
    @endforeach
@stop

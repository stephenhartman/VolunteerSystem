@extends('layout')

@section('content')

    <h1>All Volunteer Centers</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        @foreach ($volunteer_centers as $volunteer_center)
            <div>
                <a href="{{ $volunteer_center->path() }}">{{ $volunteer_center->name }}</a>
            </div>
    @endforeach
@stop

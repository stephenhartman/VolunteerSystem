@extends('layout')

@section('content')

    <h1>All Volunteers</h1>

    @foreach ($members as $member)
        <div>
            <a href="{{ $member->path() }}">{{ $member->first_name }} {{ $member->last_name }}</a>
        </div>
    @endforeach
@stop

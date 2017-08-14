@extends('layout')

@section('content')
    <h1>{{ $member->first_name }} {{ $member->last_name }}</h1>
    <ul>
        @foreach ($member->emergency_contacts() as $contact)
            <li>{{ $contact }}</li>
        @endforeach
    </ul>
@stop

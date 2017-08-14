@extends('layout')

@section('content')
    <h1>{{ $member->first_name }} {{ $member->last_name }}</h1>
    <ul>
        Emergency Contacts
        @foreach ($member->emergency_contacts() as $contact)
            <li>{{ $contact->first_name }} {{ $contact->last_name }}</li>
        @endforeach
    </ul>
@stop

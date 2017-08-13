@extends('layout')

@section('content')
    <h1>{{ $member->first_name }} {{ $member->last_name }}</h1>
@stop

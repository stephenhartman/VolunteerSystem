@extends('layout')

@section('content')

    <h1>All Volunteers</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        @foreach ($members as $member)
            <div>
                <a href="{{ $member->path() }}">{{ $member->first_name }} {{ $member->last_name }}</a>
            </div>
    @endforeach
@stop

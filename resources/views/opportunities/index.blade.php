@extends('layout')

@section('content')

    <h1>All Opportunities</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        @foreach ($opportunities as $opportunity)
            <div>
                <a href="{{ $opportunity->path() }}">{{ $opportunity->name }}</a>
            </div>
    @endforeach
@stop

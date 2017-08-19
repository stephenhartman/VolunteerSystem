@extends('layout')

@section('content')

    <h1>All Opportunities</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        @foreach ($opportunities as $opportunity)
            <div>
                <a href="{{ URL::to('/opportunities/' . $opportunity->id) }}">{{ $opportunity->name }}</a>
            </div>
    @endforeach
    {{ $opportunities->links() }}
@stop

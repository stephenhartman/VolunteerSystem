@extends('layout')

@section('content')

    <h1>Volunteers</h1>

    @if (session()->has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        @foreach ($members as $member)
            <div>
                <a href="{{ URL::to('members/' . $member->id) }}">{{ $member->first_name }} {{ $member->last_name }}</a>
            </div>
    @endforeach
    {{ $members->links() }}
@stop

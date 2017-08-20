@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>Volunteers</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('members.create') }}" class="btn btn-block btn-primary" style="margin-top: 18px">New Member</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!--end of row-->


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

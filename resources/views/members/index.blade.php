@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>Volunteers</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('members.create') }}" class="btn btn-block btn-primary" style="margin-top: 18px">New Volunteer</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!--end of row-->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($members as $member)
            <div>
                <a href="{{ URL::to('members/' . $member->id) }}">{{ $member->first_name }} {{ $member->last_name }}</a>
            </div>
        @endforeach
        {{ $members->links() }}
        </div>
    </div>
@stop

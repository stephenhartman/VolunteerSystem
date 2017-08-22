@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <h1>Volunteers</h1>
        </div>
            @include('_member_search')
    </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!--end of row-->

    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @foreach ($members as $member)
            <div>
                <a href="{{ URL::to('members/' . $member->id) }}">{{ $member->first_name }} {{ $member->last_name }}</a>
            </div>
        @endforeach
        {{ $members->links() }}
        </div>
        <div class="col-md-2">
            <a href="{{ route('members.create') }}" class="btn btn-block btn-primary" style="margin-top: 18px">New Volunteer</a>
        </div>
    </div>
@stop

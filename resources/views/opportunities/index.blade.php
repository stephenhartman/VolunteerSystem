@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <h1>Opportunities</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!--end of row-->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($opportunities as $opportunity)
            <div>
                <a href="{{ URL::to('/volunteer_centers/' . $opportunity->volunteer_center_id . '/opportunities/' . $opportunity->id) }}">{{ $opportunity->name }}</a>
            </div>
        @endforeach
        {{ $opportunities->links() }}
        </div>
    </div>
@stop

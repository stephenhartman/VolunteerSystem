@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <h1>Opportunities</h1>
        </div>
            @include('_opportunities_search')
        <div class="col-md-2">
            <a href="{{-- route('volunteer_centers.opportunities.create', $volunteer_center->id) --}}#" class="btn btn-block btn-primary" style="margin-top: 18px">New Opportunity</a>
        </div>
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

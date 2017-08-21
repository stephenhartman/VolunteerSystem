@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::open(['route' => 'opportunities.store']) }}
                {{Form::label('name', 'Name')}}
                {{Form::text('name', null, array('class'=> 'form-control'))}}

                {{Form::label('start_time', 'Start Time')}}
                {{Form::time('start_time', null, array('class'=> 'form-control'))}}

                {{Form::label('end_time', 'End Time')}}
                {{Form::time('end_time', null, array('class'=> 'form-control'))}}

                {{Form::label('event_day', 'Event Day')}}
                {{Form::date('event_day', null, array('class'=> 'form-control'))}}

                {{Form::label('volunteer_center_id', 'Volunteer Center')}}
                {{Form::select('volunteer_center_id', $volunteer_centers, null, array('class'=> 'form-control'))}}
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('opportunities.index', 'Cancel', array(), array('class' => "btn btn-danger btn-block")) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => "btn btn-success btn-block"]) }}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::model($opportunity, ['route' => ['volunteer_centers.opportunities.update', $opportunity, $volunteer_center], 'method' => 'PUT']) }}
                {{Form::label('name', 'Name')}}
                {{Form::text('name', null, array('class'=> 'form-control'))}}

                {{Form::label('start_time', 'Start Time')}}
                {{Form::time('start_time', null, array('class'=> 'form-control'))}}

                {{Form::label('end_time', 'End Time')}}
                {{Form::time('end_time', null, array('class'=> 'form-control'))}}

                {{Form::label('event_day', 'Event Day')}}
                {{Form::date('event_day', null, array('class'=> 'form-control'))}}

                <br>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('volunteer_centers.opportunities.index', 'Cancel', array($volunteer_center), array('class' => "btn btn-danger btn-block")) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => "btn btn-success btn-block"]) }}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

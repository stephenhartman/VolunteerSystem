@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::model($schedule, ['route' => ['members.schedules.update', $member, $schedule], 'method' => 'PUT']) }}
            {{Form::label('start_time', 'Start Time')}}
            {{Form::time('start_time', null, array('class'=> 'form-control'))}}

            {{Form::label('end_time', 'End Time')}}
            {{Form::time('end_time', null, array('class'=> 'form-control'))}}

            {{Form::label('day_id', 'Day')}}
            {{Form::select('day_id', [ 1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday'> 3, 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'], array('class'=> 'form-control'))}}

            {{Form::label('notes', 'Notes')}}
            {{Form::text('notes', null, array('class'=> 'form-control'))}}


            <br>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('members.show', 'Cancel', array($member), array('class' => "btn btn-danger btn-block")) !!}
                </div>
                <div class="col-sm-6">
                    {{ Form::submit('Save Changes', ['class' => "btn btn-success btn-block"]) }}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('route' => array('members.interests.store', $member->id))) }}
                {{Form::label('interest', 'Interest')}}
                {{Form::text('interest', null, array('class'=> 'form-control'))}}
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

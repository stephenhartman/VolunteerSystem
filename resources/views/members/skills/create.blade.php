@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('route' => array('members.skills.store', $member->id))) }}
                {{Form::label('skill', 'Skill')}}
                {{Form::text('skill', null, array('class'=> 'form-control'))}}

                {{Form::label('skill_level', 'Skill Level')}}
                {{Form::number('skill_level', null, array('class'=> 'form-control'))}}

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

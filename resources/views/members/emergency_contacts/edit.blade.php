@extends('layout')

@section('content')

    <div class="row">
        {!! Form::model($emergency_contact, ['route' => ['members.emergency_contacts.update', $member, $emergency_contact], 'method' => 'PATCH']) !!}
        <div class="col-md-8 col-md-offset-2">

            {{Form::label('first_name', 'First Name')}}
            {{Form::text('first_name', null, array('class'=> 'form-control'))}}

            {{Form::label('last_name', 'Last Name')}}
            {{Form::text('last_name', null, array('class'=> 'form-control'))}}

            {{Form::label('email', 'Email')}}
            {{Form::text('email', null, array('class'=> 'form-control'))}}

            {{Form::label('street', 'Street')}}
            {{Form::text('street', null, array('class'=> 'form-control'))}}

            {{Form::label('city', 'City')}}
            {{Form::text('city', null, array('class'=> 'form-control'))}}

            {{Form::label('state', 'State')}}
            {{Form::text('state', null, array('class'=> 'form-control'))}}

            {{Form::label('zipcode', 'Zipcode')}}
            {{Form::text('zipcode', null, array('class'=> 'form-control'))}}

            {{Form::label('home_phone', 'Home Phone')}}
            {{Form::text('home_phone', null, array('class'=> 'form-control'))}}

            {{Form::label('work_phone', 'Work Phone')}}
            {{Form::text('work_phone', null, array('class'=> 'form-control'))}}

            {{Form::label('cell_phone', 'Cell Phone')}}
            {{Form::text('cell_phone', null, array('class'=> 'form-control'))}}

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

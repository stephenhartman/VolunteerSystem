@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'members.store']) !!}
                {{Form::label('first_name', 'First Name')}}
                {{Form::text('first_name', null, array('class'=> 'form-control'))}}

                {{Form::label('last_name', 'Last Name')}}
                {{Form::text('last_name', null, array('class'=> 'form-control'))}}

                {{Form::label('email', 'Email')}}
                {{Form::text('email', null, array('class'=> 'form-control'))}}

                {{Form::label('username', 'Username')}}
                {{Form::text('username', null, array('class'=> 'form-control'))}}
                <br>
                {{Form::label('password', 'Password')}}
                {{Form::password('password', null, array('class'=> 'form-control'))}}
                <br>
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
                {{Form::label('drivers_license', 'DL')}}
                {{Form::checkbox('drivers_license', 1, array('class'=> 'form-control'))}}
                <br>
                {{Form::label('ss_card', 'SS card')}}
                {{Form::checkbox('ss_card', 1, array('class'=> 'form-control'))}}
                <br>
                {{Form::label('approval_status', 'Approval Status')}}
                {{Form::select('approval_status', ['pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'], array('class'=> 'form-control'))}}

            {{Form::submit('Click', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 5px'))}}

            {!! Form::close() !!}
        </div>
    </div>

@endsection

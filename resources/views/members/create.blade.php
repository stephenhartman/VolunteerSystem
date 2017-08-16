@extends('layout')

@section('content')

    <div class="alert alert-info">{{ Html::ul($errors->all()) }}</div>
    {{ Form::open(array('url' => 'members')) }}
    <div class="form-group">
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name', ('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name', Input::old('last_name'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', Input::old('email'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Input::old('username'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', Input::old('password'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('street', 'Street Address') }}
        {{ Form::text('street', Input::old('street'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', Input::old('city'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', Input::old('state'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('zipcode', 'Zipcode') }}
        {{ Form::text('zipcode', Input::old('zipcode'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('home_phone', 'Home Phone Number') }}
        {{ Form::text('home_phone', Input::old('home_phone'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('work_phone', 'Work Phone Number') }}
        {{ Form::text('work_phone', Input::old('work_phone'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('cell_phone', 'Cell Phone Number') }}
        {{ Form::text('cell_phone', Input::old('cell_phone'), array('required', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('drivers_license', "Driver's License?") }}
        {{ Form::checkbox('drivers_license', Input::old('drivers_license'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('approval_status', "Approval Status") }}
        {{ Form::select('approval_status', ['Pending', 'Approved', 'Rejected'], Input::old('ss_card'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Add new volunteer', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}

@extends('layouts.main')

@section('content')

{{ Form::model($user, array('route' => array('users.store'), 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>

    @if(isset($errors))
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    {{ Form::text('user[username]', null, array('class'=>'form-control', 'placeholder'=>'Username')) }}
    {{ Form::password('user[password]', array('class'=>'form-control', 'placeholder'=>'Password')) }}
    {{ Form::password('user[password_confirmation]', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}

    {{ Form::submit('Register', array('class'=>'btn btn-lg btn-primary btn-block'))}}


{{ Form::close() }}

@stop

@extends('layouts.auth')

@section('title', 'Reset Password')

@section('heading', 'Please enter your new password.')

@section('content')
    {!! Form::open() !!}

    {!! Form::hidden('token', $token) !!}

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection

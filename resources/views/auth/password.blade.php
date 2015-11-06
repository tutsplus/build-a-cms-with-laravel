@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('heading', 'Please provide your e-mail to reset your password.')

@section('content')
    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Send Password Reset Link', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection

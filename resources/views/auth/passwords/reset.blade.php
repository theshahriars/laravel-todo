@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('Reset Password') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => route('password.request'), 'method' => 'POST', 'role' => 'form']) !!}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" type="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                        <a class="btn btn-link" href="{{ route('login') }}">
                            Login Here.
                        </a>
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row text-center">
                <a href="{{ route('home.index') }}" class="btn btn-link">Go to Home</a>
            </div>
        </div>
    </div>
@endsection
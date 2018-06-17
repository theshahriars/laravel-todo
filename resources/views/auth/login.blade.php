@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('Login') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => route('login'), 'method' => 'POST', 'role' => 'form']) !!}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" value="admin@example.com" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="secret" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <a style="margin-left: 0; padding-left: 0;" class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                            <a style="margin-right: 0; padding-right: 0;" class="btn btn-link pull-right" href="{{ route('register') }}">
                                Register here.
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

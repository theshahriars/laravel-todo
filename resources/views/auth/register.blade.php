@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('Register') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => route('register'), 'method' => 'POST', 'role' => 'form']) !!}
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
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
                        <a class="btn btn-link" href="{{ route('login') }}">
                            Already a member? Login Here.
                        </a>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
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
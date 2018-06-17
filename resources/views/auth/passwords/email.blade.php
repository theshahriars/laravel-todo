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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['url' => route('password.email'), 'method' => 'POST', 'role' => 'form']) !!}
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                        <a class="btn btn-link" href="{{ route('login') }}">
                            Login Here
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
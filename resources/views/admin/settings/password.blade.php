@extends('layouts.app')

@section('title', 'Settings - Password')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Password</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Account Password
                </div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['url' => route('settings.password.update'), 'method' => 'POST', 'role' => 'form']) !!}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" name="password" type="password" placeholder="Enter password" class="form-control">
                                @if($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" style="margin-left: 5px;">Update Profile</button>
                            <button type="reset" class="btn btn-danger pull-right">Reset Button</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('style')

@stop

@section('script')

@stop
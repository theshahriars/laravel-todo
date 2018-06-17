@extends('layouts.app')

@section('title', 'Settings - Profile')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Profile</h1>
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
                    Account Information
                </div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['url' => route('settings.profile.update'), 'method' => 'POST', 'role' => 'form']) !!}
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" name="name" type="text" value="{{ old('name') ? old('name') : $user->name }}" placeholder="Enter your name" class="form-control">
                                    @if($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" name="email" type="text" value="{{ old('email') ? old('email') : $user->email }}" placeholder="Enter your email" class="form-control">
                                    @if($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
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
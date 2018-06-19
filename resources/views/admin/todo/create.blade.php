@extends('layouts.app')

@section('title', 'Create Todo')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Todo</h1>
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
                    Todo Information
                </div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['url' => route('admin.todo.store'), 'method' => 'POST', 'role' => 'form']) !!}
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Enter title" class="form-control">
                                    @if($errors->has('title'))
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="description" name="description" placeholder="Enter description" class="form-control" cols="30" rows="5">{{ old('description') }}</textarea>
                                    @if($errors->has('description'))
                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Start</label>
                                    <input id="start" name="start" type="date" value="{{ old('start') }}" placeholder="Enter start" class="form-control">
                                    @if($errors->has('start'))
                                        <p class="text-danger">{{ $errors->first('start') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>End</label>
                                    <input id="end" name="end" type="date" value="{{ old('end') }}" placeholder="Enter end" class="form-control">
                                    @if($errors->has('end'))
                                        <p class="text-danger">{{ $errors->first('end') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select id="priority" name="priority" class="form-control">
                                        <option value="">Select priority</option>
                                        <option value="high">High</option>
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                    @if($errors->has('priority'))
                                        <p class="text-danger">{{ $errors->first('priority') }}</p>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" style="margin-left: 5px;">Submit</button>
                                <button type="reset" class="btn btn-danger pull-right">Reset</button>
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
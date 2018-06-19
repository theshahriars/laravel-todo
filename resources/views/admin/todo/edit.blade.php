@extends('layouts.app')

@section('title', 'Update Todo')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Todo</h1>
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
                        {!! Form::open(['url' => route('admin.todo.update', ['id' => $todo->id]), 'method' => 'POST', 'role' => 'form']) !!}
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" name="title" type="text" value="{{ old('title') ? old('title') : $todo->title }}" placeholder="Enter title" class="form-control">
                                    @if($errors->has('title'))
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="description" name="description" placeholder="Enter description" class="form-control" cols="30" rows="5">{{ old('description') ? old('description') : $todo->description }}</textarea>
                                    @if($errors->has('description'))
                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Start</label>
                                    <input id="start" name="start" type="date" value="{{ old('start') ? old('start') : $todo->start }}" placeholder="Enter start" class="form-control">
                                    @if($errors->has('start'))
                                        <p class="text-danger">{{ $errors->first('start') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>End</label>
                                    <input id="end" name="end" type="date" value="{{ old('end') ? old('end') : $todo->end }}" placeholder="Enter end" class="form-control">
                                    @if($errors->has('end'))
                                        <p class="text-danger">{{ $errors->first('end') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select id="priority" name="priority" class="form-control">
                                        <option value="">Select priority</option>
                                        @if(old('priority'))
                                            <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                                            <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                                            <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                                        @else
                                            <option value="high" {{ $todo->priority == 'high' ? 'selected' : '' }}>High</option>
                                            <option value="medium" {{ $todo->priority == 'medium' ? 'selected' : '' }}>Medium</option>
                                            <option value="low" {{ $todo->priority == 'low' ? 'selected' : '' }}>Low</option>
                                        @endif
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
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">Create</div>
                            <div>New ToDo</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.todo.create') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Click Here</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-check-circle fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $completed }}</div>
                            <div>Complted</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.todo.index', ['status' => 1]) }}">
                    <div class="panel-footer">
                        <span class="pull-left">Vew Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-minus-circle fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $not_completed }}</div>
                            <div>Not Complted</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.todo.index', ['status' => 0]) }}">
                    <div class="panel-footer">
                        <span class="pull-left">Vew Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-star fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $total_high }}</div>
                            <div>High Priority</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.todo.index', ['filter' => 'high']) }}">
                    <div class="panel-footer">
                        <span class="pull-left">Vew Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-star-half-empty fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $total_medium }}</div>
                            <div>Medium Priority</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.todo.index', ['filter' => 'medium']) }}">
                    <div class="panel-footer">
                        <span class="pull-left">Vew Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-star-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $total_low }}</div>
                            <div>Low Priority</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.todo.index', ['filter' => 'low']) }}">
                    <div class="panel-footer">
                        <span class="pull-left">Vew Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@stop

@section('style')

@stop

@section('script')

@stop
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Todo List</h1>
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
                    All Todos
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 400px;">Title</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $count = 1;
                                    $color = [
                                        'high' => 'success',
                                        'medium' => 'warning',
                                        'low' => 'default'
                                    ]
                                ?>
                                @forelse($todos as $todo)
                                    <tr class="{{ $color[$todo->priority] }}">
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $todo->title }}</td>
                                        <td>{{ $todo->start }}</td>
                                        <td>{{ $todo->end }}</td>
                                        <td>{{ $todo->priority }}</td>
                                        <td>
                                            <a href="{{ route('admin.todo.toggle', ['id' => $todo->id]) }}" class="btn btn-{{ $todo->status == 1 ? 'warning' : 'success' }} btn-circle">
                                                <i class="fa fa-{{ $todo->status == 1 ? 'minus' : 'check' }}"></i>
                                            </a>
                                            <a href="{{ route('admin.todo.edit', ['id' => $todo->id]) }}" class="btn btn-primary btn-circle">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{ route('admin.todo.destroy', ['id' => $todo->id]) }}" class="btn btn-danger btn-circle">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                       <td class="text-center" colspan="6">No item available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $todos->links() }}
                </div>
            </div>
        </div>
    </div>
@stop

@section('style')

@stop

@section('script')

@stop
@extends('admin.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ trans('admin.task.list') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <th>{{ trans('admin.numberical_order') }}</th>
                    <th>{{ trans('admin.task.name') }}</th>
                    <th>{{ trans('admin.task.user') }}</th>
                    <th>{{ trans('admin.created_at') }}</th>
                    <th>{{ trans('admin.action') }}</th>
                </thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->user->name }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $tasks->render() }}
        </div>
    </div>
@endsection

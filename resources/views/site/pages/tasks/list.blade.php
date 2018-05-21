@extends('site.master')

@section('content')
    <div class="panel-body">
        {!! Form::open([
            'action' => 'TaskController@store',
            'method' => 'POST',
            'classs' => 'form-horizontal',
        ]) !!}
        <div class="form-group">
            {!! Form::label('name', trans('task.name'), [
                'class' => 'col-sm-3 control-label'
            ]) !!}
            <div class="col-sm-6">
            {!! Form::text('name', '', [
                'placeholder' => trans('task.name'),
                'id' => 'name',
                'class' => 'form-control',
            ]) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit(trans('task.add'), [
                'class' => 'btn btn-default',
            ]) !!}
        </div>
        {!! Form::close() !!}
    </div>

    @if (count($tasks))
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ trans('task.current') }}
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>{{ trans('task.numberical_order') }}</th>
                        <th>{{ trans('task.name') }}</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>
                                    <div>{{ $loop->index }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td>
                                {!! Form::open([
                                    'action' => ['TaskController@destroy', $task->id],
                                    'method' => 'DELETE',
                                ]) !!}
                                {!! Form::submit(trans('task.delete'), [
                                    'class' => 'btn btn-danger',
                                ]) !!}
                                {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <h3>{{ trans('task.not_found') }}</h3>
    @endif
@endsection

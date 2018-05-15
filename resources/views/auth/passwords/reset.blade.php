@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('user.register_form') }}</div>
                <div class="card-body">
                    {!! Form::open([
                        'action' => 'Auth\ResetPasswordController@reset',
                        'method' => 'POST',
                    ]) !!}
                    <div class="form-group row">
                        {!! Form::label('email', trans('user.email'), [
                            'class' => 'col-sm-4 col-form-label text-md-right'
                        ]) !!}
                        <div class="col-md-6">
                        {!! Form::email('email', '', [
                            'placeholder' => trans('user.email'),
                            'id' => 'email',
                            'class' => 'form-control',
                            'value' => $email ?? old('email'),
                        ]) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('password', trans('user.password'), [
                            'class' => 'col-sm-4 col-form-label text-md-right'
                        ]) !!}
                        <div class="col-md-6">
                        {!! Form::password('password', [
                            'placeholder' => trans('user.password'),
                            'id' => 'password',
                            'class' => 'form-control',
                        ]) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('password_confirmation', trans('user.password_confirmation'), [
                            'class' => 'col-sm-4 col-form-label text-md-right'
                        ]) !!}
                        <div class="col-md-6">
                        {!! Form::password('password_confirmation', [
                            'placeholder' => trans('user.password_confirmation'),
                            'id' => 'password_confirmation',
                            'class' => 'form-control',
                        ]) !!}
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit(trans('user.reset_password'), [
                                'class' => 'btn btn-primary',
                            ]) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

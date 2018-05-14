@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('user.login_form') }}</div>
                <div class="card-body">
                    {!! Form::open([
                        'action' => 'Auth\LoginController@login',
                        'method' => 'POST',
                    ]) !!}
                    <div class="form-group row">
                        {!! Form::label('name', trans('user.email'), [
                                'class' => 'col-sm-4 col-form-label text-md-right'
                        ]) !!}
                        <div class="col-md-6">
                        {!! Form::email('email', '', [
                                'placeholder' => trans('user.email'),
                                'id' => 'email',
                                'class' => 'form-control',
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
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('remember', old('remember') ? 'checked' : '', true) }} {{ trans('user.remember_me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit(trans('user.login'), [
                                'class' => 'btn btn-primary',
                            ]) !!}
                            <a class="btn btn-link" href="{{ action('Auth\ForgotPasswordController@showLinkRequestForm') }}">
                                {{ trans('user.forgot_password') }}
                            </a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

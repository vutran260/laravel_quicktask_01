@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('user.reset_password_form') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open([
                        'action' => 'Auth\ForgotPasswordController@sendResetLinkEmail',
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

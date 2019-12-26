@extends('Admin::Layouts.login')

@section('title', __('login'))

@section('content')
    <p class="login-box-msg">
        @if(Session::has('alert-warning'))
            {{ __(Session::get('alert-warning')) }}
        @else
            {{ __('sign in to start your session') }}
        @endif
    </p>

    {!! Form::model($manager, ['route' => 'admin.managers.login']) !!}
        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::text('email', null, ['class' => 'form-control', 'maxlength' => 255, 'placeholder' => __('email address')]) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::password('password', ['class' => 'form-control', 'maxlength' => 255, 'placeholder' => __('password')]) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <div class="icheckbox_square-blue" style="position: relative;" aria-checked="false" aria-disabled="false">
                            {!! Form::checkbox('remember', 'remember', null, ['style' => 'position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;']) !!}
                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                        </div> {{ __('remember me') }}
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                {!! Form::submit(__('login'), ['class' => 'btn btn-primary btn-block btn-flat']) !!}
            </div>
        </div>
    {{ Form::close() }}
    <a href="#">{{ __('i forgot my password') }}</a>
@stop
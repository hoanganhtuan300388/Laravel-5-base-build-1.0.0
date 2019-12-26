@extends('Admin::Layouts.default')

@section('title', __('add new manager'))

@section('content_header')
    @include('Admin::Elements.content_header', [
        'title'         => __('manager'),
        'description'   => __('edit'),
        'breadcrumb'    => [
            'admin.managers.index'  => 'manager',
            'admin.managers.create' => 'edit'
        ]
    ])
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        {{ __('basic information') }}
                    </h3>
                </div>

                {!! Form::model($manager, ['route' => ['admin.managers.update', $manager->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) !!}
                    <div class="box-body">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('email', __('email address'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                <p class="form-control-static">
                                    {{ $manager->email }}
                                </p>
                                {!! Form::hidden('id') !!}
                                {!! Form::hidden('email') !!}
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <!--
                        <div class="form-group {{ $errors->has('password_current') ? 'has-error' : '' }}">
                            {!! Form::label('password_current', __('current password'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::password('password_current', ['class' => 'form-control input-sm', 'maxlength' => 255]) !!}
                                {!! $errors->first('password_current', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password_new') ? 'has-error' : '' }}">
                            {!! Form::label('password_new', __('new password'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::password('password_new', ['class' => 'form-control input-sm', 'maxlength' => 255]) !!}
                                {!! $errors->first('password_new', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                            {!! Form::label('confirm_password', __('confirm password'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::password('confirm_password', ['class' => 'form-control input-sm', 'maxlength' => 255]) !!}
                                {!! $errors->first('confirm_password', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            {!! Form::label('first_name', __('first name'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('first_name', null, ['class' => 'form-control input-sm', 'maxlength' => 45]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('last_name', __('last name'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('last_name', null, ['class' => 'form-control input-sm', 'maxlength' => 45]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('gender', __('gender'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                <div class="radio">
                                    <label>
                                        {!! Form::radio('gender', GENDER_MALE, true, ['class' => 'minimal']) !!} {{ __('male') }}
                                    </label>
                                    &nbsp;&nbsp;
                                    <label>
                                        {!! Form::radio('gender', GENDER_FEMALE, false, ['class' => 'minimal']) !!} {{ __('female') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('birthday', __('birthday'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-3">
                                {!! Form::text('birthday', null, ['class' => 'date-picker form-control input-sm', 'maxlength' => 45]) !!}
                            </div>
                        </div>
                        <!--
                        <div class="form-group">
                                {!! Form::label('store', __('store'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5"></div>
                        </div>
                        -->
                        <div class="form-group">
                            {!! Form::label('note', __('note'), ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::textarea('note', null, ['class' => 'form-control', 'rows' => 3, 'maxlength' => 500]) !!}
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                {!! link_to_route('admin.managers.index', __('back'), [], ['class' => 'btn btn-default']) !!}
                                &nbsp;
                                {!! Form::submit(__('update'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
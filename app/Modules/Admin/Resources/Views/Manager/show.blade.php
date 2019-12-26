@extends('Admin::Layouts.default')

@section('title', __('Manager detail information'))

@section('content_header')
    @include('Admin::Elements.content_header', [
        'title'         => __('manager'),
        'description'   => __('detail'),
        'breadcrumb'    => [
            'admin.managers.index' => 'manager',
            'admin.managers.show'  => 'detail'
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
                <div class="box-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                {{ __('ID') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    <b>{{ $manager->id }}</b>
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('email address') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    <a href="mailto:{{ $manager->email }}">{{ $manager->email }}</a>
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('first name') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {{ $manager->first_name }}
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('last name') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {{ $manager->last_name }}
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('gender') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {{ $manager->gender == GENDER_MALE ? __('male') : __('female') }}
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('birthday') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {{ $manager->birthday }}
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('rule') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {{ $manager->rule == RULE_MASTER_ADMIN ? __('master admin') : __('store admin') }}
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('note') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {!! nl2br(e($manager->note)) !!}
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('created at') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {{ $manager->created_at }}
                                </p>
                            </div>
                            <label class="col-sm-2 control-label">
                                {{ __('updated at') }}
                            </label>
                            <div class="col-sm-9">
                                <p class="form-control-static">
                                    {{ $manager->updated_at }}
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-5">
                            {!! link_to_route('admin.managers.index', __('back'), [], ['class' => 'btn btn-default']) !!}
                            &nbsp;
                            {!! link_to_route('admin.managers.edit', __('edit'), ['id' => $manager->id], ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
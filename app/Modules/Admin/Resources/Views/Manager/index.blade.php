@extends('Admin::Layouts.default')

@section('title', __('manager list'))

@section('content_header')
    @include('Admin::Elements.content_header', [
        'title'         => __('manager'),
        'description'   => __('list'),
        'breadcrumb'    => [
            'admin.managers.index' => 'manager'
        ]
    ])
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('search condition') }}</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    {!! Form::model($search, ['route' => 'admin.managers.search', 'class' => 'form-horizontal']) !!}
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('email', __('email address'), ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('email', null, ['class' => 'form-control input-sm', 'maxlength' => 255]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('rule', __('rule'), ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::select('rule', ['' => __('-- Choice --'), RULE_MASTER_ADMIN => __('master admin'), RULE_STORE_ADMIN => __('store admin')], '', ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', __('name'), ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('name', null, ['class' => 'form-control input-sm', 'maxlength' => 200]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-7">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i> {{ __('search') }}
                                    </button>
                                    &nbsp;
                                    <a href="{{ route('admin.managers.create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> {{ __('add new') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        {{ __('manager list') }}
                    </h3>
                    <div class="box-tools pull-right">
                        @include('Admin::Elements.limit', ['route' => 'admin.managers.search'])
                    </div>
                </div>
                <div class="box-body">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">{{ __('id') }}</th>
                                                <th class="text-center">{{ __('email address') }}</th>
                                                <th class="text-center">{{ __('name') }}</th>
                                                <th class="text-center">{{ __('rule') }}</th>
                                                <th class="text-center" width="180">{{ __('actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($managers) && count($managers) > 0)
                                            @foreach($managers as $index => $manager)
                                                <tr>
                                                    <td>{{ $manager->id }}</td>
                                                    <td><a href="mailto:{{ $manager->email }}">{{ $manager->email }}</a></td>
                                                    <td>{{ "$manager->first_name $manager->last_name" }}</td>
                                                    <td>{{ $manager->rule == RULE_MASTER_ADMIN ? __('master admin') : __('store admin') }}</td>
                                                    <td>
                                                        {!! Form::open(['route' => ['admin.managers.destroy', $manager->id], 'data-form' => 'delete-form']) !!}
                                                            {{ method_field('DELETE') }}
                                                            <a href="{{ route('admin.managers.show', $manager->id) }}" class="btn bg-olive btn-sm">
                                                                {{ __('detail') }}
                                                            </a>
                                                            <a href="{{ route('admin.managers.edit', $manager->id) }}" class="btn btn-info btn-sm">
                                                                {{ __('edit') }}
                                                            </a>
                                                            @if ($manager->id != Auth()->guard('admin')->user()->id)
                                                                <button type="button" class="btn btn-danger btn-sm call-modal-confirm-delete-btn" data-message="{{ __('do you want to delete ?', ['name' => __('manager')]) }}">
                                                                    {{ __('delete') }}
                                                                </button>
                                                            @endif
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="data-tables-empty" colspan="5">
                                                    {{ __('record not found.') }}
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @include('Admin::Elements.pagination', ['pagination' => $managers])
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Admin::Elements.modal_confirm_delete')
@stop
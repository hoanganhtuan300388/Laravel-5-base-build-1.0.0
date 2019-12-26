@extends('Admin::Layouts.default')

@section('title', __('dashboard'))

@section('content_header')
    @include('Admin::Elements.content_header', [
        'title'         => __('dashboard'),
        'description'   => '',
        'breadcrumb'    => []
    ])
@endsection

@section('content')
    index
@stop
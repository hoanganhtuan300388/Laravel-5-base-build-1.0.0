<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ APP_NAME }} | @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('modules/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/plugins/iCheck/square/blue.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="skin-blue sidebar-mini login-page">
<div class="login-box">
    <div class="login-logo">
        <a>
            <b>MARGIN</b>COUPON
        </a>
    </div>
    <div class="login-box-body">

        <!-- CONTENT -->
        @yield('content')

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('modules/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('modules/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('modules/admin/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
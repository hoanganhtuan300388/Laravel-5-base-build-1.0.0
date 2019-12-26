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
    <link href="{{ asset('modules/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/bower_components/morris.js/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/bower_components/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/plugins/iCheck/all.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/admin/app.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- HEADER -->
        @include('Admin::Elements.header')

        <!-- SIDEBAR -->
        @include('Admin::Elements.sidebar')

        <div class="content-wrapper">

            <!-- CONTENT HEADER -->
            @yield('content_header')

            <section class="content">

                <!-- ALERT -->
                @foreach (unserialize(ADMIN_ALERTS) as $msg => $info)
                    @if(Session::has('alert-' . $msg))
                        <div class="alert alert-{{ $msg }} alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-{{ $info['icon'] }}"></i> {{ __($info['title']) }}</h4>
                            {{ Session::get('alert-' . $msg) }}
                        </div>
                    @endif
                @endforeach

                <!-- CONTENT -->
                @yield('content')

            </section>
        </div>

        <!-- FOOTER -->
        @include('Admin::Elements.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('modules/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{ asset('modules/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('modules/admin/plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('modules/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('modules/admin/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('modules/admin/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('modules/admin/app.js') }}"></script>
</body>
</html>
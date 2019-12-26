<header class="main-header">
    <a href="{{ route('admin.dashboards.index') }}" class="logo">
        <span class="logo-mini"><b>M</b>CO</span>
        <span class="logo-lg"><b>Margin</b>Coupon</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">
                {{ __('toggle navigation') }}
            </span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('modules/admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">
                            {{ Auth()->guard('admin')->user()->first_name . ' ' . Auth()->guard('admin')->user()->last_name }}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ url('modules/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                            <p>
                                {{ Auth()->guard('admin')->user()->first_name . ' ' . Auth()->guard('admin')->user()->last_name }}
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                {!! link_to_route('admin.managers.index', __('profile'), [], ['class' => 'btn btn-default btn-flat']) !!}
                            </div>
                            <div class="pull-right">
                                {!! link_to_route('admin.managers.logout', __('sign out'), [], ['class' => 'btn btn-default btn-flat']) !!}
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
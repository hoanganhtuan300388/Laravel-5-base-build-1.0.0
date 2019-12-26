<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ __('list of manager') }}</li>
            <li>
                <a href="{{ route('admin.dashboards.index') }}">
                    <i class="fa fa-home"></i>
                    <span>{{ __('dashboard') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.managers.index') }}">
                    <i class="fa fa-user-secret"></i>
                    <span>{{ __('manager') }}</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
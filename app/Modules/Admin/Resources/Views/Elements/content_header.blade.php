<section class="content-header">
    <h1>
        {{ $title }}
        <small>{{ $description }}</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboards.index') }}">
                <i class="fa fa-dashboard"></i> {{ __('dashboard') }}
            </a>
        </li>
        @foreach($breadcrumb as $routeName => $label)
            <li class="active">
                @if ($routeName == key(array_slice($breadcrumb, -1, 1, TRUE)))
                    {{ __($label) }}
                @else
                    <a href="{{ route($routeName) }}">{{ __($label) }}</a>
                @endif
            </li>
        @endforeach
    </ol>
</section>
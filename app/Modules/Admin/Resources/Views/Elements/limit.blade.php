{!! Form::model($search, ['route' => $route, 'class' => 'form-horizontal', 'id' => 'frm-display-list']) !!}
    {{ __('display results') }}
    {{
        Form::select(
            'limit',
            unserialize(ADMIN_DEFAULT_LIMITS_DISPLAY),
            ADMIN_DEFAULT_LIMIT,
            [
                'class'     => 'input-sm',
                'onchange'  => '$("#frm-display-list").submit()'
            ]
        )
    }}
{!! Form::close() !!}
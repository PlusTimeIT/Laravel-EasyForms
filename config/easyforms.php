<?php

return [
    'display' => TRUE,
    'form-namespace' => 'App\Http\Forms',
    'form-path' => app_path('Http/Forms'), // must not have trailing forward slash
    'routes' => [
        'examples' => TRUE,
        'global' => TRUE,
    ],
    'tooltip-icon' => 'mdi-help',
];

<?php

return [
    'display' => true,
    'axios-prefix' => 'axios',
    'middleware' => 'web',
    'form-namespace' => 'PlusTimeIT\EasyForms\Forms',
    'form-path' => app_path('Http/Forms'), // must not have trailing forward slash
    'routes' => [
        'examples' => true,
        'global' => true,
    ],
    'tooltip-icon' => 'mdi-help',
];

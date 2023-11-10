<?php

return [
    'display' => true,
    'prefix' => 'axios',
    'middleware' => 'web',
    'form' => [
        'namespace' => 'PlusTimeIT\EasyForms\Forms',
        'path' => app_path('Http/Forms'), // must not have trailing forward slash
    ],
    'defaults' => [
        'tooltip-icon' => 'mdi-help',
    ],
];

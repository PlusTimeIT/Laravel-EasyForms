<?php

return [
    'display' => TRUE,
    'form-namespace' => 'PlusTimeIT\EasyForms\Forms',
    'form-path' => app_path('Http/Forms'), // must not have trailing forward slash
    'routes' => [
        'examples' => TRUE,
        'global' => TRUE,
    ],
    'tooltip-icon' => 'mdi-help',
];

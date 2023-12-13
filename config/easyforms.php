<?php
use PlusTimeIT\EasyForms\Enums\DefaultHelpPositions;
use PlusTimeIT\EasyForms\Elements\Icon;

return [
    'display' => true,
    'prefix' => 'axios',
    'middleware' => 'web',
    'form' => [
        'namespace' => 'PlusTimeIT\EasyForms\Forms',
        'path' => app_path('Http/Forms'), // must not have trailing forward slash
    ],
    'defaults' => [
        'help' => [
            'position' => DefaultHelpPositions::AppendInner,
            'icon' => Icon::make()->setIcon('mdi-help'),
        ]
    ],
];

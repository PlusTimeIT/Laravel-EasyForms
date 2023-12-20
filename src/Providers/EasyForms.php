<?php

namespace PlusTimeIT\EasyForms\Providers;

use Illuminate\Support\ServiceProvider;

class EasyForms extends ServiceProvider
{
    protected array $commands = [
        'PlusTimeIT\EasyForms\Console\Commands\MakeForm',
    ];

    public function boot(): void
    {
        $this->publishes(
            [
                __DIR__.'/../../config/easyforms.php' => config_path('easyforms.php'),
            ],
            'config'
        );

        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }

    public function register(): void
    {
        $this->commands($this->commands);
        $this->mergeConfigFrom(
            __DIR__.'/../../config/easyforms.php',
            'config'
        );
    }
}

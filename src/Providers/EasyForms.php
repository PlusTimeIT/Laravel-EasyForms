<?php
namespace PlusTimeIT\EasyForms\Providers;

use Illuminate\Support\ServiceProvider;

class EasyForms extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/easyforms.php' => config_path('easyforms.php'),
            'easyforms',
        ]);

        $this->publishes(
            [__DIR__ . '/../../views/' => resource_path('views') . '/vendor/plustime-it/laravel-easyforms'],
            'easyforms'
        );

        $this->publishes(
            [__DIR__ . '/../../resources/js/components/form-loader' => resource_path('js/components/vendor/plustime-it/laravel-easyforms')],
            'easyforms'
        );

        $this->publishes(
            [__DIR__ . '/../../resources/css' => public_path('css/vendor/plustime-it/laravel-easyforms')],
            'easyforms'
        );

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }

    public function register()
    {
        $this->commands($this->commands);

        $this->mergeConfigFrom(
            __DIR__ . '/../../config/easyforms.php',
            'easyforms'
        );
    }

    protected $commands = [
        'PlusTimeIT\EasyForms\Console\Commands\MakeForm',
    ];
}

<?php

namespace Second2None\EasyForms\Core\Providers;

use Log;

// Second2None\EasyForms\Core\Providers\EasyForms;
class EasyForms extends \Illuminate\Support\ServiceProvider{

    protected $commands = [
        \Second2None\EasyForms\Core\Commands\InitiateSetupCommand::class
    ];

    public function boot(){
        
        // Load Database migrations
        $this->loadMigrationsFrom( '../DB/Migrations' );
        $this->publishes( [ '../Config.php' => config_path('easy_forms.php') , ] );
        $this->loadRoutesFrom(  '../Routes/web.php' );
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'courier');
        // Route::get('/dashboard', function () {
        //     return view('courier::dashboard');
        // });
    }

    public function register(){
        Log::debug( 'SERVICE PROVIDER INITITAED' );
        $this->commands( $this->commands );

        $this->mergeConfigFrom(
            __DIR__.'/../config/easy_forms.php', 'easy_forms'
        );
    }

    protected function isEventDispatcher( $instance ) {
        return $instance instanceof EventDispatcher
            || $instance instanceof Dispatcher
            || $instance instanceof DispatcherContract;
    }
}

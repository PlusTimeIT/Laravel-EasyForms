<?php

namespace Second2None\EasyForms\Core\Providers;


class ServiceProvider extends \Illuminate\Support\ServiceProvider{

    protected $commands = [
        Second2None\EasyForms\Core\Commands\InitiateSetupCommand::class
    ];

    public function boot(){
        
        // Load Database migrations
        $this->loadMigrationsFrom( '../DB/Migrations' );
        $this->publishes( [ '../Config.php' => config_path('easy_forms.php') , ] );

    }

    public function register(){
        $this->commands( $this->commands );
    }

    protected function isEventDispatcher( $instance ) {
        return $instance instanceof EventDispatcher
            || $instance instanceof Dispatcher
            || $instance instanceof DispatcherContract;
    }
}

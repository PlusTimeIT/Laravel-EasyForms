<?php

namespace Second2None\EasyForms\Core\Providers;


class ServiceProvider extends \Illuminate\Support\ServiceProvider{

    public function boot(){
        
        // Load Database migrations
        $this->loadMigrationsFrom( __DIR__ . '../DB/Migrations');
        $this->publishes( [ __DIR__.'../Config.php' => config_path('easy_forms.php') , ] );

    }

    public function register(){
        // Needed for Laravel < 5.3 compatibility
    }

    protected function isEventDispatcher($instance)
    {
        return $instance instanceof EventDispatcher
            || $instance instanceof Dispatcher
            || $instance instanceof DispatcherContract;
    }
}

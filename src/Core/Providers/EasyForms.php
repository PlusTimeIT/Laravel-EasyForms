<?php

namespace Second2None\EasyForms\Core\Providers;

use Second2None\EasyForms\Core\Base;

use File;
use Log;

// Second2None\EasyForms\Core\Providers\EasyForms;
class EasyForms extends \Illuminate\Support\ServiceProvider{

    protected $commands = [
        \Second2None\EasyForms\Core\Commands\InitiateSetupCommand::class
    ];

    public function boot(){
        
        // Load Database migrations
        //$this->loadMigrationsFrom( 'DB/Migrations' );

        $this->publishes( 
            [ dirname( dirname(__FILE__) ) . '/Config.php' => config_path( 'easy_forms.php' ) ] ,
            'config' 
        );
        $this->publishes( 
            [ dirname( dirname(__FILE__) ) . '/DB/Migrations/' => database_path( 'migrations' ) ] , 
            'migrations' 
        );

        $this->loadRoutesFrom(  'Routes/web.php' );
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'courier');
        // Route::get('/dashboard', function () {
        //     return view('courier::dashboard');
        // });
    }

    public function register(){
        $this->commands( $this->commands );

        if( Base::is_vendor_published() )
            $this->mergeConfigFrom(  '../../config/easy_forms.php', 'easy_forms' );
           
    }

    protected function isEventDispatcher( $instance ) {
        return $instance instanceof EventDispatcher
            || $instance instanceof Dispatcher
            || $instance instanceof DispatcherContract;
    }
}

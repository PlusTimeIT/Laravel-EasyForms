<?php

namespace Second2None\EasyForms\App\Providers;

use Second2None\EasyForms\App\Core\Base;

use File;
use Log;

// Second2None\EasyForms\App\Providers\EasyForms;
class EasyForms extends \Illuminate\Support\ServiceProvider{

    protected $package_directories = [];

    protected $commands = [
        \Second2None\EasyForms\App\Commands\InitiateSetup::class ,
        \Second2None\EasyForms\App\Commands\DatabaseSeeder::class ,
        \Second2None\EasyForms\App\Commands\SettingUpdate::class , 
        \Second2None\EasyForms\App\Commands\Uninstall::class , 
    ];

    public function __construct(){
        $this->package_directories = Base::get_directories();
    }

    public function boot(){

        // publish configuration file
        $this->publishes( 
            [ $this->package_directories[ 'config' ] . '/easy_forms.php' => config_path( 'easy_forms.php' ) ] ,
            'config' 
        );
        // publish migration files
        $this->publishes( 
            [ $this->package_directories[ 'migrations' ] => database_path( 'migrations' ) ] , 
            'migrations' 
        );
        // publish vue-components files
        $this->publishes( 
            [ $this->package_directories[ 'assets' ] => resource_path('assets/vendor/s2n-easyforms') ] , 
            'vue-components' 
        );

        $this->publishes( 
            [ $this->package_directories[ 'views' ] => resource_path('views') . '/vendor/s2n-easyforms' ] , 
            'views' 
        );

        $this->loadRoutesFrom(  $this->package_directories[ 'routes' ] . '/web.php' );
    }

    public function register(){
        $this->commands( $this->commands );
    }

    protected function isEventDispatcher( $instance ) {
        return $instance instanceof \EventDispatcher
            || $instance instanceof \Dispatcher
            || $instance instanceof \DispatcherContract;
    }
}

<?php

namespace Second2None\EasyForms\App\Providers;

use Illuminate\Support\ServiceProvider;
use Second2None\EasyForms\App\Core\Base;
use Second2None\EasyForms\App\Core\LoadForm;
use Second2None\EasyForms\App\Core\Settings;

use File;
use Log;

// Second2None\EasyForms\App\Providers\EasyForms;
class EasyForms extends ServiceProvider {

    protected $package_directories = [];

    protected $commands = [
        \Second2None\EasyForms\App\Commands\InitiateSetup::class ,
        \Second2None\EasyForms\App\Commands\DatabaseSeeder::class ,
        \Second2None\EasyForms\App\Commands\SettingUpdate::class , 
        \Second2None\EasyForms\App\Commands\Uninstall::class , 
    ];

    public $singletons = [
        DowntimeNotifier::class => PingdomDowntimeNotifier::class,
        ServerProvider::class => ServerToolsProvider::class,
    ];

    public function __construct(){
        $this->package_directories = Base::get_directories();

        $form = ( new LoadForm )->getForm( 'example_form' );
        Log::debug( json_encode( $form ) );
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

        $this->app->singleton( 'EasyForm\Settings', function ($app) {
            return new Settings($app['EasyFormSettings']);
        });

        $this->commands( $this->commands );
    }

    protected function isEventDispatcher( $instance ) {
        return $instance instanceof \EventDispatcher
            || $instance instanceof \Dispatcher
            || $instance instanceof \DispatcherContract;
    }
}

<?php

namespace PlusTimeIT\EasyForms\App\Providers;

use App;

use Illuminate\Support\ServiceProvider;
use PlusTimeIT\EasyForms\App\Core\Base;

use PlusTimeIT\EasyForms\App\Core\LoadForm;
use PlusTimeIT\EasyForms\App\Core\Settings;
use PlusTimeIT\EasyForms\App\Core\LoadFields;

// PlusTimeIT\EasyForms\App\Providers\EasyForms;
class EasyForms extends ServiceProvider {

    protected $package_directories = [];

    protected $commands = [
        \PlusTimeIT\EasyForms\App\Commands\InitialSetup::class ,
        \PlusTimeIT\EasyForms\App\Commands\Uninstall::class , 
    ];

    public function __construct(){
        $this->package_directories = Base::getDirectories();        
    }

    public function boot(){
        
        
        // publish configuration file
        $this->publishes( 
            [ app( Base::class )->directories->config . '/easy_forms.php' => config_path( 'easy_forms.php' ) ] ,
            'config' 
        );

        // publish vue-components files
        $this->publishes( 
            [ app( Base::class )->directories->components => resource_path('assets/components/vendor/s2n-easyforms') ] , 
            'vue-components' 
        );

        $this->publishes( 
            [ app( Base::class )->directories->views => resource_path('views') . '/vendor/s2n-easyforms' ] , 
            'views' 
        );

        $this->publishes( 
            [ app( Base::class )->directories->data => resource_path('data') ] , 
            'data' 
        );

        $this->loadRoutesFrom( app( Base::class )->directories->routes . '/web.php' );
    }

    public function register(){
        $this->commands( $this->commands );

        App::singleton('LoadForm', function ($app) {
            return new LoadForm();
        });
        App::singleton('LoadFields', function ($app) {
            return new LoadFields();
        });
        App::singleton('Base', function ($app) {
            return new Base();
        });
        App::singleton('Base', function ($app) {
            return new Settings();
        });
    }

    protected function isEventDispatcher( $instance ) {
        return $instance instanceof \EventDispatcher
            || $instance instanceof \Dispatcher
            || $instance instanceof \DispatcherContract;
    }
}

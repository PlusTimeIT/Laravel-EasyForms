<?php

namespace Second2None\EasyForms\App\Commands;

use Illuminate\Console\Command;

use Second2None\EasyForms\App\Core\Base;
use Second2None\EasyForms\App\Models\Settings;

use Artisan;
use File;

// use Second2None\EasyForms\App\Commands\SettingUpdate;
class SettingUpdate extends Command {

    protected $signature    = 'SEF:update-setting {--name=} {--value=}';
    protected $description  = 'Second2None Easy Forms database seeder';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {

        $this->comment( 'Second2None EasyForms Update Setting Starting ===================================================================' );
        $this->comment( '-- Searching for setting' );
        $setting = Settings::where( 'name' , $this->option('name') )->first();
        if( ! $setting ) {
            $this->comment( '-- Could not find setting with name:' . $this->option('name') );
            $this->comment( 'Second2None EasyForms Update Setting Finished ===================================================================' );
            return 0;
        }

        $setting->value = $this->option('value'); 
        $this->comment( '-- ' . ( $setting->save() ? 'Successfully saved ' . $this->option('name') : 'Failed to save '  . $this->option('name') . '. Try running it again.' ) );
        
        $this->comment( 'Second2None EasyForms Update Setting Finished ===================================================================' );
        return 0;
    }
}

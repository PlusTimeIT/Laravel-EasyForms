<?php

namespace PlusTimeIT\EasyForms\App\Core;

use PlusTimeIT\EasyForms\App\DB\Connector;

use PlusTimeIT\EasyForms\App\Core\Settings;

use DB;
use File;
use Schema;
use Log;

// use PlusTimeIT\EasyForms\App\Core\Base;
class Base {

        public $directories;

        public function __construct(){
            $this->directories = self::getDirectories();
        }

        public static function isVendorPublished() : bool {
            return Settings::get( 'vendor_published' ) ?? false;
        }

        public static function getDirectories() : object {
            $package_directories = [];
            $package_directories[ 'base' ]        = dirname( dirname( dirname( __FILE__ ) ) );
            
            // base directories
            $package_directories[ 'config' ]      = $package_directories[ 'base' ] . '\config';
            $package_directories[ 'resources' ]   = $package_directories[ 'base' ] . '\resources';
            $package_directories[ 'routes' ]      = $package_directories[ 'base' ] . '\routes';
            $package_directories[ 'src' ]         = $package_directories[ 'base' ] . '\src';
            $package_directories[ 'views' ]       = $package_directories[ 'base' ] . '\views';

            // resources directories
            $package_directories[ 'assets' ]      = $package_directories[ 'resources' ] . '\assets';
            $package_directories[ 'components' ]  = $package_directories[ 'assets' ] . '\components';
            $package_directories[ 'data' ]        = $package_directories[ 'resources' ] . '\data';

            return ( object ) $package_directories;
        }

}
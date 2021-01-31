<?php

namespace PlusTimeIT\EasyForms\App\Core;

use Illuminate\Support\Collection;

use File;
use Log;

/**
 * Settings
 * ===========
 * All dynamic system settings, these settings can updated on the fly and soft saved, 
 * or permenately saved overwritting the current settings file.
 * 
 * use PlusTimeIT\EasyForms\App\Core\Settings;
 */

class Settings {
		
		private $settings = null;
		private $directory = null;
		
		public function __construct(){ 
			// if( File::exists( resource_path( 'data\settings\settings.json' ) ) ){
                $this->setLoadDirectory( resource_path( 'data\settings\settings.json' ) );
            // }else{
            //     $this->setLoadDirectory( app( Base::class )->directories->data . '\settings\settings.json' );
            // }
            //$this->loadSettings();
        }

        public function setLoadDirectory( string $directory ){
            $this->directory = rtrim( $directory , '/' );
            return $this;
		}
		
        public function loadSettings(){
			$this->settings = collect( json_decode( File::get( $this->directory ) ) );
		}
		
		/**
		 * getAllSettings
		 * Return a collection of all settings
		 *
		 * @return collection return all current settings
		 */
		public function getAllSettings() : collection {
			return $this->settings ?? collect( [] ); 
		}
		
		/**
		 * putSettings
		 * Set the settings property
		 * 
		 * @param  collection $settings
		 * @return Settings
		 */
		public function putSettings( collection $settings ) : Settings {
			$this->settings = $settings; 
			return $this;
		}

		public function saveSettings() : void {
			if( File::exists( $this->directory ) ){
				File::put( $this->directory , $this->settings->values()->toJson( JSON_PRETTY_PRINT ) );
			}
		}

				
		/**
		 * get
		 * return a particular setting
		 * @param  string $setting_name Setting name to search
		 * @return mixed returns setting value integer, boolean, string, array or object
		 */
		public static function get( string $setting_name ){
			return app( Settings::class )->getAllSettings()->where( 'name' , $setting_name )->first()->value ?? null;
		}
		
		/**
		 * set
		 * Set the value of a particular setting, this is a soft save and will be refreshed each request.
		 * @param  mixed $setting_name
		 * @param  mixed $new_value
		 * @return void
		 */
		public static function set( string $setting_name , $new_value ) : void {
			$settings = app( Settings::class )->getAllSettings()->map( function( $setting ) use ( $setting_name , $new_value ) {
				if( $setting->name != $setting_name ) return $setting;
				$setting->value = $new_value;
				return $setting;
			});
			app( Settings::class )->putSettings( $settings );
		}

		public static function save() : void {
			app( Settings::class )->saveSettings();
		}


}
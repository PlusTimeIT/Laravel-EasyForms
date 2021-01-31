<?php

namespace PlusTimeIT\EasyForms\App\Core;

use PlusTimeIT\EasyForms\App\Core\Base;

use File;
use Log;

// use PlusTimeIT\EasyForms\App\Core\LoadFields;

class LoadFields {

        protected $directory;
        public $fields;

        public function __construct(){ 
            if( app( Base::class )->isVendorPublished() ){
                $this->setLoadDirectory( resource_path( 'data\fields' ) );
            }else{
                $this->setLoadDirectory( app( Base::class )->directories->data . '\fields' );
            }
            $this->loadFields();
        }

        public function setLoadDirectory( string $directory ){
            $this->directory = rtrim( $directory , '/' );
            return $this;
        }

        public function loadFields(){
            $this->fields = collect( [] );
            if( file_exists( $this->directory ) ){
                $fields = collect( scandir( $this->directory ) )->map( function( $file ) {
                    if( ! is_dir( $this->directory . '/' . $file ) ){
                        return json_decode( file_get_contents( $this->directory . '/' . $file ) ) ?? false;
                    }
                })->filter( function( $form_data ) {
                    return $form_data ?? false;
                });

                $this->fields = $fields;
            }
        }
        
}
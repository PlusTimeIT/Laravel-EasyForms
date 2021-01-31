<?php

namespace PlusTimeIT\EasyForms\App\Core;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\App\Core\Base;
use PlusTimeIT\EasyForms\App\Objects\EasyForm;

use File;
use Log;

// use PlusTimeIT\EasyForms\App\Core\LoadForm;
class LoadForm {

        protected $load_directory;

        public function __construct(){ 
            if( app( Base::class )->isVendorPublished() ){
                $this->setLoadDirectory( resource_path( 'data\forms' ) );
            }else{
                $this->setLoadDirectory( app( Base::class )->directories->data . '\forms' );
            }
        }

        public function setLoadDirectory( string $directory ){
            $this->load_directory = rtrim( $directory , '/' );
            return $this;
        }

        public function getForm( string $form_name ){

            $file_path = $this->load_directory . '/' . $form_name . '.json';
            if( ! File::exists( $file_path ) ){
                return false;
            }
            $form_data = json_decode( File::get( $file_path ) );
            return is_null( $form_data ) ? false : new EasyForm( $form_data ) ;
        }

        public static function loadForm( String $form_name ){
            return ( new LoadForm )->getForm( $form_name );
        }

}
<?php

namespace Second2None\EasyForms\App\Core;

use Second2None\EasyForms\App\Core\Base;

use File;

// use Second2None\EasyForms\App\Core\LoadForm;
class LoadForm {

        public $package_directories = [];
        protected $load_directory;
        protected $form_name;

        public function __construct(){
            $this->package_directories = Base::get_directories();     
            $this->load_directory = $this->package_directories[ 'forms' ];
        }

        public function setLoadDirectory( String $directory ){
            $this->load_directory = rtrim( $directory , '/' );
            return $this;
        }

        public function getForm( String $form_name ){
            $this->form_name = $form_name;
            $file_path = $this->load_directory . '/' . $form_name . '.json';
            if( ! File::exists( $file_path ) ){
                return false;
            }

            $form_file = json_decode( File::get( $file_path ) );
            return $form_file ?? false;
        }

}
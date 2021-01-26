<?php

namespace Second2None\EasyForms\App\Models;

use Illuminate\Database\Eloquent\Model;


use Second2None\EasyForms\App\DB\Connector;

class FormFields extends Model {

    protected $table = Connector::FORMFIELDS_TABLE;

    protected $fillable = [
        'name' , 'default_value' , 'rules' , 'status'
    ];

    protected $appends = [
        'status_label' ,
    ];

    protected $casts = [
        'rules' => 'Object'
    ];

    protected $status_labels = [ 'inactive' , 'active' ];
    
    public function getStatusLabelAttribute(){
        return $this->status_labels[ $this->status ] ?? 'Status Error';
    }

    public static function get_default_rules_by_name( $name ){
        return ( array ) self::where( 'name' , $name )->first()->rules;
    }

    public static function get_field_vue_tempalte() {
        return  [
            'field_type'     => '',
            'required'      => false,
            'value'         => '',
            'label'         => '',
            'validation'    => '',
        ];
    }

    public static function field_defaults( $default_value = '' ){
        return [
                'required'          => true ,
                'placeholder'       => '' ,
                'label'             => '' ,
                'readonly'          => false ,
                'value'             => $default_value ,
                'help'              => '' ,
        ];
    }
    
}

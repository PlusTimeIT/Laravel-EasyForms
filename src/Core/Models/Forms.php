<?php

namespace Second2None\EasyForms\Core\Models;

use Illuminate\Database\Eloquent\Model;

use Second2None\EasyForms\Core\DB\Connector;

// use Second2None\EasyForms\Core\Models\Forms;
class Forms extends Model {
    
    protected $table = Connector::FORMS_TABLE;

    protected $fillable = [
        'name' , 'area' , 'field_data' , 'custom_data' , 'callback_functions' , 'status'
    ];

    protected $appends = [
        'status_label' ,
    ];

    protected $casts = [
        'field_data'            => 'Array' ,
        'custom_data'           => 'Array' ,
        'callback_functions'    => 'Object' ,
    ];

    protected $status_labels = [ 'inactive' , 'active' ];
    
    public function getStatusLabelAttribute(){
        return $this->status_labels[ $this->status ] ?? 'Status Error';
    }

    // LOCAL SCOPES
    public function scopeActive( $query ){
        return $query->where( 'status' , 1 );
    }
    
    // OBJECT TEMPLATES
    public static function get_callback_function_template( string $fill = '' , string $process = '' ){
        return ( object ) [
            'fill'  =>  $fill ,
            'process'  =>  $process ,
        ];
    }
}

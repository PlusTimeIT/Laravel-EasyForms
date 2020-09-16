<?php

namespace Second2None\EasyForms\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {
    
    protected $table = 'forms';

    protected $fillable = [
        'name' , 'value' , 'category' , 'tab' , 'editable' , 'status'
    ];

    protected $appends = [
        'status_label' , 'editable_label' ,
    ];

    protected $status_labels = [ 'inactive' , 'active' ];

    protected $editable_labels = [ 'not editable' , 'editable' ];
    
    public function getValueAttribute( $value ){
        return json_decode( $value ) ?? $value;
    }
    
    public function setValueAttribute( $value ){
        return is_array( $value ) || is_object( $value ) ? json_encode( $value ) : $value;
    }
    
    public function getStatusLabelAttribute(){
        return $this->status_labels[ $this->status ] ?? 'Status Error';
    }
    
    public function getEditableLabelAttribute(){
        return $this->editable_labels[ $this->editable ] ?? 'Edit Error';
    }

    // LOCAL SCOPES
    public function scopeActive( $query ){
        return $query->where( 'status' , 1 );
    }

    public function scopeEditable( $query ){
        return $query->where( 'editable' , 1 );
    }
    
    // OBJECT TEMPLATES
    public static function get_callback_function_template( string $fill = '' , string $process = '' ){
        return ( object ) [
            'fill'  =>  $fill ,
            'process'  =>  $process ,
        ];
    }
}

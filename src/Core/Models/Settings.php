<?php

namespace Second2None\EasyForms\Core\Models;

use Illuminate\Database\Eloquent\Model;

use Second2None\EasyForms\Core\DB\Connector;
use Second2None\EasyForms\Core\Models\Casts\Auto;

use Log;

class Settings extends Model {
    
    protected $table = Connector::SETTINGS_TABLE;

    protected $fillable = [
        'name' , 'value' , 'category' , 'tab' , 'editable' , 'status'
    ];

    protected $casts = [
        'value' => Auto::class
    ];
    protected $appends = [
        'status_label' , 'editable_label' ,
    ];

    protected $status_labels = [ 'inactive' , 'active' ];

    protected $editable_labels = [ 'not editable' , 'editable' ];
    
    // public function getValueAttribute( $value ){
    //     return json_decode( $value ) ?? $value;
    // }
    
    // public function setValueAttribute( $value ){
    //     return is_array( $value ) || is_object( $value ) ? json_encode( $value ) : $value;
    // }
    
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
    
    public static function complete_initial_setup(){
        $setting = self::where( 'name' , 'initial_setup' )->first();
        if( ! $setting )
            return false;
        
        $setting->value = 1;
        return $setting->save();      
    }

    // OBJECT TEMPLATES
    public static function get_callback_function_template( string $fill = '' , string $process = '' ){
        return ( object ) [
            'fill'      =>  $fill ,
            'process'   =>  $process ,
        ];
    }
}

<?php

namespace Second2None\EasyForms\Core\Models;

use Illuminate\Database\Eloquent\Model;

use Second2None\EasyForms\Core\DB\Connector;

class Errors extends Model {

    protected $table = Connector::ERROR_TABLE;

    protected $fillable = [
        'action' , 'type' , 'code' , 'message' , 'status'
    ];

    protected $appends = [
        'status_label' , 'type_label'
    ];

    protected $status_labels = [ 'inactive' , 'active' ];
    protected $type_labels = [ 'validation' , 'middleware' ];
    
    public function getStatusLabelAttribute(){
        return $this->status_labels[ $this->status ] ?? 'Status Error';
    }
    
    public function getTypeLabelAttribute(){
        return $this->type_labels[ $this->type ] ?? 'Type Error';
    }

}

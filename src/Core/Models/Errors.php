<?php

namespace Second2None\EasyForms\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Errors extends Model {

    protected $table = 'form_errors';

    protected $fillable = [
        'action' , 'type' , 'code' , 'message' , 'status'
    ];

    protected $appends = [
        'status_label' ,
    ];

    protected $status_labels = [ 'inactive' , 'active' ];
    
    public function getStatusLabelAttribute(){
        return $this->status_labels[ $this->status ] ?? 'Status Error';
    }

}

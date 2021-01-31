<?php
 
 namespace PlusTimeIT\EasyForms\App\Contracts;
 
use Illuminate\Http\Request;

// use PlusTimeIT\EasyForms\App\Contracts\FieldContract;
 
trait FieldContract {
 
    public $name;
    public $order;
    public $cols;
    public $type;
    public $rules;
    
    public function toArray(){
         return [
              'name' => $this->name ,
              'order' => $this->order ,
              'cols' => $this->cols ,
              'type' => $this->type ,
              'rules' => $this->rules ,
         ];
    }

    public function setName( string $name ) {
         $this->name = $name;
         return $this;
    }

    public function getName() {
         return $this->name;
    }

    public function setOrder( int $order ) {
         $this->order = $order;
         return $this;
    }

    public function getOrder() {
         return ( int ) $this->type;
    }

    public function setCols( int $cols ) {
         $this->cols = $cols;
         return $this;
    }

    public function getCols() {
          return ( int ) $this->cols;
    }

    public function setType( string $type ) {
          $this->type = $type;
          return $this;
     }

     public function getType() {
          return $this->type;
     }

    public function setRules( object $rules ) {
         $this->rules = $rules;
         return $this;
    }

    public function getRules() {
         return $this->rules;
    }
 
}
<?php
 
namespace PlusTimeIT\EasyForms\App\Contracts;
 
use PlusTimeIT\EasyForms\App\Objects\EasyFormField;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

// use PlusTimeIT\EasyForms\App\Contracts\FormContract;
trait FormContract {
 
     public $status_labels = [ 'Inactive', 'Active' ];

     public $name = '';
     public $type = '';
     public $middleware = '';
     public $fields = '';
     public $action = '';
     public $status = '';

     public function toArray(){
          return [
               'name' => $this->name ,
               'type' => $this->type ,
               'middleware' => $this->middleware ,
               'fields' => $this->fields ,
               'action' => $this->action ,
               'status' => $this->status ,
          ];
     }

     public function convertFields( array $fields ) {
          return collect( $fields )->map( function( $field ) {
              return new EasyFormField( $field );
          }); 
      }
  
      public function setName( string $name ) {
          $this->name = $name;
          return $this;
      }
  
      public function getName() {
          return $this->name;
      }
  
      public function setType( string $type ) {
          $this->type = $type;
          return $this;
      }
  
      public function getType() {
          return $this->type;
      }
  
      public function setMiddleware( string $middleware ) {
          $this->middleware = $middleware;
          return $this;
      }
  
      public function getMiddleware() {
          return $this->middleware;
      }
  
      public function setFields( collection $fields ) {
          $this->fields = $fields;
          return $this;
      }
  
      public function getFields() {
          return $this->fields;
      }
  
      public function setAction( object $action ) {
          $this->action = $action;
          return $this;
      }
  
      public function getAction() {
          return $this->action;
      }
  
      public function setStatus( int $status ) {
          $this->status = $status;
          return $this;
      }
  
      public function getStatus() {
          return $this->status;
      }
  
      public function getStatusLabel() {
          return $this->status_label[ $this->status ];
      }
 
}
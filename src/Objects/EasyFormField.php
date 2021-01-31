<?php

namespace PlusTimeIT\EasyForms\App\Objects;

use PlusTimeIT\EasyForms\App\Contracts\FieldContract;

// use PlusTimeIT\EasyForms\App\Objects\EasyFormField;
class EasyFormField {
    use FieldContract;
    
    public function __construct( object $field ){
        return $this
            ->setName( $field->name )
            ->setOrder( $field->order ?? 0 )
            ->setCols( $field->cols ?? 12 )
            ->setType( $field->type )
            ->setRules( $field->rules );
   }

}

<?php

namespace PlusTimeIT\EasyForms\App\Objects;

use PlusTimeIT\EasyForms\App\Contracts\FormContract;
use Illuminate\Support\Collection;


use Log;

// use PlusTimeIT\EasyForms\App\Objects\EasyForm;
class EasyForm {
    use FormContract;

    public function __construct( object $form ){
        return $this->setName( $form->name )
            ->setType( $form->type )
            ->setMiddleware( $form->middleware )
            ->setFields( $this->convertFields( $form->fields ) )
            ->setAction( $form->action )
            ->setStatus( $form->status ); 
   }
}

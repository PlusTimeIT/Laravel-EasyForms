<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Elements\Action;

interface InputFormInterface
{   
    public function getAction();

    public function setAction(Action $action);

    public function toArray();

    public function toJson();
}

<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\ActionInterface;
use PlusTimeIT\EasyForms\Traits\ActionTrait;

class Action implements ActionInterface
{
    public static function make()
    {
        return new static();
    }

    use ActionTrait;
}

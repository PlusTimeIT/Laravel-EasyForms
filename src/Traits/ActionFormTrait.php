<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Traits\{ToArrayTrait, ToJsonTrait};

trait ActionFormTrait
{
    protected $name = '';

    protected $type = '';

    use ToArrayTrait;
    use ToJsonTrait;
}

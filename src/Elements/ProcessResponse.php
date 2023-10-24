<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\ProcessResponseInterface;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\ProcessResponseTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

class ProcessResponse implements ProcessResponseInterface
{
    use Creatable;
    use ProcessResponseTrait;
    use Transformable;
}

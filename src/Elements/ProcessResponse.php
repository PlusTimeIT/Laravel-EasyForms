<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\ProcessResponseInterface;
use PlusTimeIT\EasyForms\Traits\{Creatable, ProcessResponseTrait, Transformable};

class ProcessResponse implements ProcessResponseInterface
{
    use Creatable;
    use ProcessResponseTrait;
    use Transformable;
}

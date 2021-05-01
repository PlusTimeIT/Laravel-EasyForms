<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\ProcessResponseInterface;
use PlusTimeIT\EasyForms\Traits\{ProcessResponseTrait, Transformable};

class ProcessResponse implements ProcessResponseInterface
{
    public function __construct()
    {
        return $this;
    }

    use ProcessResponseTrait;
    use Transformable;
}

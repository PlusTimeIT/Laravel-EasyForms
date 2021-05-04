<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosResponseInterface;
use PlusTimeIT\EasyForms\Traits\{AxiosResponseTrait, Transformable};

class AxiosResponse implements AxiosResponseInterface
{
    public function __construct()
    {
        return $this;
    }

    use AxiosResponseTrait;
    use Transformable;
}

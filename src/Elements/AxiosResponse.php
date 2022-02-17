<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosResponseInterface;
use PlusTimeIT\EasyForms\Traits\{AxiosResponseTrait, Creatable, Transformable};

class AxiosResponse implements AxiosResponseInterface
{
    use AxiosResponseTrait;
    use Creatable;
    use Transformable;
}

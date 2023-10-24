<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosResponseInterface;
use PlusTimeIT\EasyForms\Traits\AxiosResponseTrait;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

class AxiosResponse implements AxiosResponseInterface
{
    use AxiosResponseTrait;
    use Creatable;
    use Transformable;
}

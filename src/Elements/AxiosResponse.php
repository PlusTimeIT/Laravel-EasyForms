<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosResponseInterface;
use PlusTimeIT\EasyForms\Traits\AxiosResponseTrait;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Default wrapper for all API axios responses
 */
class AxiosResponse implements AxiosResponseInterface
{
    use AxiosResponseTrait;
    use Creatable;
    use Transformable;
}

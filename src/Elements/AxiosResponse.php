<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * Default wrapper for all API axios responses
 */
class AxiosResponse implements \PlusTimeIT\EasyForms\Interfaces\AxiosResponseInterface
{
    use \PlusTimeIT\EasyForms\Traits\AxiosResponseTrait;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;
}

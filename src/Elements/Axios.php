<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosInterface;
use PlusTimeIT\EasyForms\Traits\AxiosTrait;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Axios form handler, for default axios options for forms.
 */
class Axios implements AxiosInterface
{
    use AxiosTrait;
    use Creatable;
    use Transformable;
}

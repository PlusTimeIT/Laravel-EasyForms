<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * Axios form handler, for default axios options for forms.
 */
class Axios implements \PlusTimeIT\EasyForms\Interfaces\AxiosInterface
{
    use \PlusTimeIT\EasyForms\Traits\AxiosTrait;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;
}

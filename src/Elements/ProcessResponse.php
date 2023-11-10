<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\ProcessResponseInterface;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\ProcessResponseTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Process Response for data conformity on frontend.
 * This response is returned from the process function in your backend form class.
 *
 *
 * @see AxiosResponse On the frontend this sits within the data field off an AxiosResponse
 */
class ProcessResponse implements ProcessResponseInterface
{
    use Creatable;
    use ProcessResponseTrait;
    use Transformable;
}

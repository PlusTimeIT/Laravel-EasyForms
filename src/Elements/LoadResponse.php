<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * Load Response for data conformity on frontend.
 * This response is returned from the load function in your backend form class.
 *
 *
 * @see AxiosResponse On the frontend this sits within the data field off an AxiosResponse
 */
class LoadResponse implements \PlusTimeIT\EasyForms\Interfaces\LoadResponseInterface
{
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\LoadResponseTrait;
    use \PlusTimeIT\EasyForms\Traits\Transformable;
}

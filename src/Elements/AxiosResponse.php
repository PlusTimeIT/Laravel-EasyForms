<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosResponseInterface;
use PlusTimeIT\EasyForms\Traits\{AxiosResponseTrait, Transformable};

class AxiosResponse implements AxiosResponseInterface
{
    public function __construct(bool $result, $data, bool $loader)
    {
        $this->result = $result;
        $this->data = $data;
        $this->loader = $loader;
        return $this;
    }

    use AxiosResponseTrait;
    use Transformable;
}

<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosResponseInterface;
use PlusTimeIT\EasyForms\Traits\{AxiosResponseTrait, ConvertTrait};

class AxiosResponse implements AxiosResponseInterface
{
    public function __construct(bool $result, $data)
    {
        $this->result = $result;
        $this->data = $data;
        return $this;
    }

    use AxiosResponseTrait;
    use ConvertTrait;
}

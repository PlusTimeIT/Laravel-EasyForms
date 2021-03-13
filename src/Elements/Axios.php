<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosInterface;
use PlusTimeIT\EasyForms\Traits\{AxiosTrait, ConvertTrait};

class Axios implements AxiosInterface
{
    public function __construct(array $options)
    {
        return $this->setOptions($options);
    }

    use AxiosTrait;
    use ConvertTrait;
}

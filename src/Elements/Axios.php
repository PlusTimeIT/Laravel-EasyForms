<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosInterface;
use PlusTimeIT\EasyForms\Traits\{AxiosTrait, Transformable};

class Axios implements AxiosInterface
{
    public function __construct()
    {
        return $this;
    }

    use AxiosTrait;
    use Transformable;
}

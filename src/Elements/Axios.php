<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\AxiosInterface;
use PlusTimeIT\EasyForms\Traits\{AxiosTrait, Creatable, Transformable};

class Axios implements AxiosInterface
{
    use AxiosTrait;
    use Creatable;
    use Transformable;
}

<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FormInterface;
use PlusTimeIT\EasyForms\Traits\FormTrait;

class EasyForm implements FormInterface
{
    protected $fields = [];

    protected $name = '';

    protected $title = '';

    use FormTrait;
}

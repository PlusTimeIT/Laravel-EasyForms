<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FormInterface;
use PlusTimeIT\EasyForms\Traits\FormTrait;

abstract class EasyForm implements FormInterface
{
    protected $alerts = [];

    protected $name = '';

    protected $title = '';

    use FormTrait;
}

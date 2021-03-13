<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FormInterface;

abstract class EasyForm implements FormInterface
{
    protected $fields = [];

    protected $name = '';

    protected $title = '';
}

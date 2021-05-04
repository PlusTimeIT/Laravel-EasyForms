<?php

namespace PlusTimeIT\EasyForms\Base;

class EasyField
{
    protected $clearable = false;

    protected $cols = 12;

    protected $component = 'v-text-field';

    protected $component_type = '';

    protected $dense = true;

    protected $help = '';

    protected $label = '';

    protected $masking = '';

    protected $name = '';

    protected $order = 0;

    protected $outlined = true;

    protected $placeholder = '';

    protected $readonly = false;

    protected $required = true;

    protected $rules = [];

    protected $tooltip = '';

    protected $type = 'text';

    protected $value = '';

    public static function make()
    {
        return new static();
    }
}

<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;

class EasyField implements FieldInterface
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        foreach ($options as $option => $value) {
            if ( ! property_exists(EasyField::class, $option)) {
                continue;
            }
            $this->{$option} = $value;
        }
        return $this;
    }

    protected $cols = 12;

    protected $component = 'v-text-field';

    protected $component_type = '';

    protected $label = '';

    protected $masking = [];

    protected $name = '';

    protected $order = 0;

    protected $placeholder = '';

    protected $readonly = FALSE;

    protected $required = TRUE;

    protected $tooltip = '';

    protected $type = 'text';

    protected $validation = [];

    protected $value = '';

    use FieldTrait;
}

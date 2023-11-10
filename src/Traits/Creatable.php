<?php

namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\Alert;
use PlusTimeIT\EasyForms\Elements\Icon;
use PlusTimeIT\EasyForms\Elements\Tooltip;

trait Creatable
{
    public function __construct(array $args)
    {
        return $this->setOptions($args);
    }

    public static function create(array $args = []): self
    {
        return self::make($args);
    }

    public static function make(array $args = []): self
    {
        return new static($args);
    }

    public function setOptions(array $args): self
    {
        collect($args)->each(function ($value, $arg) {
            if (property_exists(__CLASS__, $arg)) {
                $this->{$arg} = $value;
            }
        });

        return $this;
    }
}

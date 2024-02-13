<?php

namespace PlusTimeIT\EasyForms\Traits;

trait Creatable
{
    public function __construct(array $args)
    {
        return $this->setOptions($args);
    }

    public static function create(array $args = []): static
    {
        return self::make($args);
    }

    public static function make(array $args = []): static
    {
        return new static($args);
    }

    public function setOptions(array $args): static
    {
        foreach ($args as $key => $value) {
            if (property_exists(__CLASS__, $key)) {
                $this->{$key} = $value;
            }
        }

        return $this;
    }
}

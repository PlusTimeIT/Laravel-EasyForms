<?php
namespace PlusTimeIT\EasyForms\Traits;

trait Creatable
{
    public function __construct(array $args)
    {
        return $this->setOptions($args);
    }

    public static function create(array $args = [])
    {
        return self::make($args);
    }

    public static function make(array $args = [])
    {
        return new static($args);
    }

    public function setOptions(array $args): self
    {
        collect($args)->each(function($value, $arg) {
            if (property_exists(__CLASS__, $arg)) {
                $this->{$arg} = $value;
            }
        });
        return $this;
    }
}

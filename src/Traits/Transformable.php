<?php

namespace PlusTimeIT\EasyForms\Traits;

trait Transformable
{
    public function toArray(): array
    {
        $allVars = get_class_vars(__CLASS__);

        return collect($allVars)->filter(function ($value, $key) {
            return isset($this->{$key});
        })->map(function ($value, $key) {
            return $this->transformPropertyValue($this->{$key});
        })->toArray();
    }

    public function toJson(): string
    {
        return collect($this->toArray())->toJson();
    }

    protected function convertObjectToArray($object)
    {
        return method_exists($object, 'toArray') ? $object->toArray() : $object;
    }

    protected function transformPropertyValue($value)
    {
        if (is_array($value)) {
            return collect($value)->map(function ($data) {
                return $this->transformPropertyValue($data);
            });
        } elseif (is_object($value)) {
            return $this->convertObjectToArray($value);
        }

        return $value;
    }
}

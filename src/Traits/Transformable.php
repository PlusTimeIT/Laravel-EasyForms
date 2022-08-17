<?php
namespace PlusTimeIT\EasyForms\Traits;

trait Transformable
{
    public function toArray(): array
    {
        $all_vars = get_class_vars(__CLASS__);
        $self = $this;
        return collect($all_vars)->map(function($value, $key) use ($self) {
            
            if (is_array($self->{$key})) {
                return collect($self->{$key})->map(function($field) use ($self) {
                    if (is_array($field)) {
                        return collect($field)->map(function($data) {
                            if (is_object($data)) {
                                return  method_exists($data, 'toArray') ? $data->toArray() : $data;
                            }
                            return $data;
                        });
                    }
                    if (is_object($field)) {
                        return  method_exists($field, 'toArray') ? $field->toArray() : $field;
                    }
                    return $field;
                });
            }
            if (is_object($self->{$key})) {
                return  method_exists($self->{$key}, 'toArray') ? $self->{$key}->toArray() : $self->{$key};
            }
            return $self->{$key};
        })->toArray();
    }

    public function toJson(): string
    {
        return collect($this->toArray())->toJson();
    }
}

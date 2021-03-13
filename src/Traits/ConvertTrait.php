<?php
namespace PlusTimeIT\EasyForms\Traits;

trait ConvertTrait
{
    public function toArray(): array
    {
        $all_vars = get_class_vars(__CLASS__);
        $self = $this;
        return collect($all_vars)->map(function($value, $key) use ($self) {
            if (is_array($self->{$key})) {
                return collect($self->{$key})->map(fn($field) => $field->toArray());
            }
            if (is_object($self->{$key})) {
                return $self->{$key}->toArray();
            }
            return $self->{$key};
        })->toArray();
    }

    public function toJson(): string
    {
        return collect($this->toArray())->toJson();
    }
}

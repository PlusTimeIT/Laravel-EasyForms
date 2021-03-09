<?php
namespace PlusTimeIT\EasyForms\Traits;

trait ToJsonTrait
{
    public function toJson(): string
    {
        return collect($this->toArray())->toJson();
    }
}

<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFilterKeys
{
    protected $filter_keys = ['title'];

    public function getFilterKeys(): string|array
    {
        return $this->filter_keys;
    }

    public function setFilterKeys(string|array $filter_keys): self
    {
        $this->filter_keys = $filter_keys;

        return $this;
    }
}

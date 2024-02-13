<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFilterKeys
{
    protected string|array $filter_keys = ['title'];

    public function getFilterKeys(): string|array
    {
        return $this->filter_keys;
    }

    public function setFilterKeys(string|array $filter_keys): static
    {
        $this->filter_keys = $filter_keys;

        return $this;
    }
}

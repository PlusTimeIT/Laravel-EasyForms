<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSearch
{
    protected $search;

    public function getSearch(): string
    {
        return $this->search;
    }

    public function setSearch(string $search): self
    {
        $this->search = $search;

        return $this;
    }
}

<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSearch
{
    protected string $search;

    public function getSearch(): string
    {
        return $this->search;
    }

    public function setSearch(string $search): static
    {
        $this->search = $search;

        return $this;
    }
}

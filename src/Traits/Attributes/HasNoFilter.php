<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNoFilter
{
    protected bool $no_filter = false;

    public function getNoFilter(): bool
    {
        return $this->no_filter;
    }

    public function setNoFilter(bool $no_filter): static
    {
        $this->no_filter = $no_filter;

        return $this;
    }
}

<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNoFilter
{
    protected $no_filter = false;

    public function getNoFilter(): bool
    {
        return $this->no_filter;
    }

    public function setNoFilter(bool $hide_selected): self
    {
        $this->no_filter = $no_filter;

        return $this;
    }
}

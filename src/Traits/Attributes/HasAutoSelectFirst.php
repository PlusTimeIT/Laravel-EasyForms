<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAutoSelectFirst
{
    protected $auto_select_first = false;

    public function getAutoSelectFirst(): bool|string
    {
        return $this->auto_select_first;
    }

    public function setAutoSelectFirst(bool|string $auto_select_first): self
    {
        $this->auto_select_first = $auto_select_first;

        return $this;
    }
}

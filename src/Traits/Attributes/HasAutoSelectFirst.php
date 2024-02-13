<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAutoSelectFirst
{
    protected bool $auto_select_first = false;

    public function getAutoSelectFirst(): bool|string
    {
        return $this->auto_select_first;
    }

    public function setAutoSelectFirst(bool|string $auto_select_first): static
    {
        $this->auto_select_first = $auto_select_first;

        return $this;
    }
}

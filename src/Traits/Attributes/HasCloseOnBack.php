<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCloseOnBack
{
    protected $close_on_back = false;

    public function getCloseOnBack(): bool
    {
        return $this->close_on_back;
    }

    public function setCloseOnBack(bool $close_on_back): self
    {
        $this->close_on_back = $close_on_back;

        return $this;
    }
}

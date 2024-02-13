<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Button;

trait HasButton
{
    protected Button $button;

    public function getButton(): Button
    {
        return $this->button;
    }

    public function setButton(Button $button): static
    {
        $this->button = $button;

        return $this;
    }
}

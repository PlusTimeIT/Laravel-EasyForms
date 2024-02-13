<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTextStyle
{
    protected bool $text_style = false;

    public function getTextStyle(): bool
    {
        return $this->text_style;
    }

    public function setTextStyle(bool $text_style): static
    {
        $this->text_style = $text_style;

        return $this;
    }
}

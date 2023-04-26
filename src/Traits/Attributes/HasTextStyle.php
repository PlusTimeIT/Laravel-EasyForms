<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTextStyle
{
    protected $text_style = FALSE;

    public function getTextStyle(): bool
    {
        return $this->text_style;
    }

    public function setTextStyle(bool $text_style): self
    {
        $this->text_style = $text_style;
        return $this;
    }
}

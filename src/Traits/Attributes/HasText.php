<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasText
{
    protected $text = FALSE;

    public function getText(): bool
    {
        return $this->text;
    }

    public function setText(bool $text): self
    {
        $this->text = $text;
        return $this;
    }
}

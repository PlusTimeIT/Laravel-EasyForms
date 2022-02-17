<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasText
{
    protected $text = FALSE;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }
}

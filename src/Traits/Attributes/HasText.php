<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasText
{
    protected $text;

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

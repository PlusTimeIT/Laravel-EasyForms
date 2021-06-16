<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPlaceholder
{
    protected $placeholder = '';

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}

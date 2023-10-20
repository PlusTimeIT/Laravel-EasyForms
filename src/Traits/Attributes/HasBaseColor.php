<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBaseColor
{
    protected $base_color = '';

    public function getBaseColor(): string
    {
        return $this->base_color;
    }

    public function setBaseColor(string $base_color): self
    {
        $this->base_color = $base_color;
        return $this;
    }
}

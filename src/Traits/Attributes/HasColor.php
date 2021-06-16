<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasColor
{
    protected $color = 'primary';

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }
}
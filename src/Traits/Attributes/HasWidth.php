<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasWidth
{
    protected $width = 300;

    public function getWidth(): string | int
    {
        return $this->width;
    }

    public function setWidth(string | int $width): self
    {
        $this->width = $width;
        return $this;
    }
}

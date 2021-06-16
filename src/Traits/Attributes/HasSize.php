<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSize
{
    protected $size;

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }
}

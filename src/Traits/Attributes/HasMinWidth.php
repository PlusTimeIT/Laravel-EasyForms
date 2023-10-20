<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMinWidth
{
    protected $min_width;

    public function getMinWidth(): string | int
    {
        return $this->min_width;
    }

    public function setMinWidth(string | int $min_width): self
    {
        $this->min_width = $min_width;
        return $this;
    }
}

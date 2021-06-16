<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasType
{
    protected $type = '';

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
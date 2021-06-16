<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRequired
{
    protected $required = TRUE;

    public function getRequired(): bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): self
    {
        $this->required = $required;

        return $this;
    }
}

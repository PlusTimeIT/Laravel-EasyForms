<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasReadOnly
{
    protected $readonly = FALSE;

    public function getReadonly(): bool
    {
        return $this->readonly;
    }

    public function setReadonly(bool $readonly): self
    {
        $this->readonly = $readonly;

        return $this;
    }
}
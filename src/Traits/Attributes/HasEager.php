<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasEager
{
    protected $eager = FALSE;

    public function getEager(): bool
    {
        return $this->eager;
    }

    public function setEager(bool $eager): self
    {
        $this->eager = $eager;

        return $this;
    }
}

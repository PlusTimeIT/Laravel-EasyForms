<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDismissible
{
    protected $dismissible = FALSE;

    public function getDismissible(): bool
    {
        return $this->dismissible;
    }

    public function setDismissible(bool $dismissible): self
    {
        $this->dismissible = $dismissible;
        return $this;
    }
}

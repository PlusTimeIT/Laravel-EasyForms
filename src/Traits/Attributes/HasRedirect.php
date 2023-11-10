<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRedirect
{
    protected bool|string $redirect = false;

    public function getRedirect(): bool|string
    {
        return $this->redirect;
    }

    public function redirect($redirect): self
    {
        return $this->setRedirect($redirect);
    }

    public function setRedirect(bool|string $redirect): self
    {
        $this->redirect = $redirect;

        return $this;
    }
}

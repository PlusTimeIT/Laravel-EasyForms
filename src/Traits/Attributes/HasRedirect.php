<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRedirect
{
    protected $redirect;

    public function getRedirect()
    {
        return $this->redirect;
    }

    public function redirect($redirect)
    {
        return $this->setRedirect($redirect);
    }

    public function setRedirect($redirect): self
    {
        $this->redirect = $redirect;
        return $this;
    }
}

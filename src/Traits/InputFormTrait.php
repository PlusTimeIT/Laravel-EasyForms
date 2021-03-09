<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\Action;

trait InputFormTrait
{
    public function getAction(): Action
    {
        return $this->action;
    }

    public function setAction(Action $action): self
    {
        $this->action = $action;
        return $this;
    }
}

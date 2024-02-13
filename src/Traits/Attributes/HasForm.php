<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Base\ActionForm;
use PlusTimeIT\EasyForms\Base\InputForm;

trait HasForm
{
    protected InputForm|ActionForm|null $form;

    public function form(InputForm|ActionForm $form): static
    {
        return $this->setForm($form);
    }

    public function getForm(): InputForm|ActionForm|null
    {
        return $this->form;
    }

    public function setForm(InputForm|ActionForm $form): static
    {
        $this->form = $form;

        return $this;
    }
}

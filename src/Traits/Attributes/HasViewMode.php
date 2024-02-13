<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasViewMode
{
    protected bool $view_mode = false;

    public function getViewMode(): bool
    {
        return $this->view_mode;
    }

    public function setViewMode(bool $view_mode): static
    {
        $this->view_mode = $view_mode;

        return $this;
    }
}

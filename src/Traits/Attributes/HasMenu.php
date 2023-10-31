<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMenu
{
    protected $menu = false;

    public function getMenu(): bool
    {
        return $this->menu;
    }

    public function setMenu(bool $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}

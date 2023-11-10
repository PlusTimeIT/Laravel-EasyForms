<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMenu
{
    protected bool $menu = false;

    public function getMenu(): bool|string
    {
        return $this->menu;
    }

    public function setMenu(bool|string $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}

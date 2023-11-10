<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\PickerMenu;

trait HasPickerMenu
{
    protected PickerMenu $menu;

    public function getMenu(): PickerMenu
    {
        return $this->menu;
    }

    public function menu(): PickerMenu
    {
        return $this->menu;
    }

    public function setMenu(PickerMenu $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}

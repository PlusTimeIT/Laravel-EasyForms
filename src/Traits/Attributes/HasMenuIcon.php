<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasMenuIcon
{
    protected Icon|string $menu_icon = '$dropdown';

    public function getMenuIcon(): Icon|string
    {
        return $this->menu_icon;
    }

    public function setMenuIcon(Icon|string $menu_icon): static
    {
        $this->menu_icon = $menu_icon;

        return $this;
    }
}

<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNoClickAnimation
{
    protected bool $no_click_animation = false;

    public function getNoClickAnimation(): bool
    {
        return $this->no_click_animation;
    }

    public function setNoClickAnimation(bool $no_click_animation): static
    {
        $this->no_click_animation = $no_click_animation;

        return $this;
    }
}

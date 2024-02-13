<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBgOpacity
{
    protected string|int $bg_opacity;

    public function getBgOpacity(): string|int
    {
        return $this->bg_opacity;
    }

    public function setBgOpacity(string|int $bg_opacity): static
    {
        $this->bg_opacity = $bg_opacity;

        return $this;
    }
}

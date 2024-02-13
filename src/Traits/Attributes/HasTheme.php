<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTheme
{
    protected string $theme;

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): static
    {
        $this->theme = $theme;

        return $this;
    }
}

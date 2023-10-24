<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTheme
{
    protected $theme;

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}

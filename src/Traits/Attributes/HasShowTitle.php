<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasShowTitle
{
    protected bool $show_title = true;

    public function getShowTitle(): bool
    {
        return $this->show_title;
    }

    public function setShowTitle(bool $show_title): static
    {
        $this->show_title = $show_title;

        return $this;
    }
}

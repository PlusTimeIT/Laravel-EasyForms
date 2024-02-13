<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCloseOnContentClick
{
    protected bool $close_on_content_click = true;

    public function getCloseOnContentClick(): bool
    {
        return $this->close_on_content_click;
    }

    public function setCloseOnContentClick(bool $close_on_content_click): static
    {
        $this->close_on_content_click = $close_on_content_click;

        return $this;
    }
}

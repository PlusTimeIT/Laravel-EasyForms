<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCloseOnContentClick
{
    protected $close_on_content_click = true;

    public function getCloseOnContentClick(): bool
    {
        return $this->close_on_content_click;
    }

    public function setCloseOnContentClick(bool $close_on_content_click): self
    {
        $this->close_on_content_click = $close_on_content_click;

        return $this;
    }
}
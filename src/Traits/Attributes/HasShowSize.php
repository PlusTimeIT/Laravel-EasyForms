<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasShowSize
{
    protected $show_size = false;

    public function getShowSize(): bool
    {
        return $this->show_size;
    }

    public function setShowSize(bool $show_size): self
    {
        $this->show_size = $show_size;

        return $this;
    }
}

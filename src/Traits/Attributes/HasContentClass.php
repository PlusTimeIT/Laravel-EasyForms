<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContentClass
{
    protected $content_class;

    public function getContentClass()
    {
        return $this->content_class;
    }

    public function setContentClass($content_class): self
    {
        $this->content_class = $content_class;

        return $this;
    }
}

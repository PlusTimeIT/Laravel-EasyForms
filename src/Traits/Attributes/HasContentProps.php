<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContentProps
{
    protected $content_props;

    public function getContentProps()
    {
        return $this->content_props;
    }

    public function setContentProps($content_props): self
    {
        $this->content_props = $content_props;

        return $this;
    }
}

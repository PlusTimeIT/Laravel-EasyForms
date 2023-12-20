<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContentProps
{
    protected mixed $content_props;

    public function getContentProps(): mixed
    {
        return $this->content_props;
    }

    public function setContentProps(mixed $content_props): self
    {
        $this->content_props = $content_props;

        return $this;
    }
}

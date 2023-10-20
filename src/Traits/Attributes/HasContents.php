<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContentPlaceholder
{
    protected $content_placeholder = '';

    public function getContentPlaceholder(): string
    {
        return $this->content_placeholder;
    }

    public function setContentPlaceholder(string $content_placeholder): self
    {
        $this->content_placeholder = $content_placeholder;
        return $this;
    }
}

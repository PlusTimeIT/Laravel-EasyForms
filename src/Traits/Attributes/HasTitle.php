<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTitle
{
    protected $title = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
}

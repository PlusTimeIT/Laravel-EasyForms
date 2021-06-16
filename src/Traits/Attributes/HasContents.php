<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContents
{
    protected $contents = '';

    public function getContents(): string
    {
        return $this->contents;
    }

    public function setContents(string $contents): self
    {
        $this->contents = $contents;
        return $this;
    }
}

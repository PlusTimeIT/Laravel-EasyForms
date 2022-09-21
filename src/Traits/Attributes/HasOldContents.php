<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOldContents
{
    protected $old_contents = '';

    public function getOldContents(): string
    {
        return $this->old_contents;
    }

    public function setOldContents(string $old_contents): self
    {
        $this->old_contents = $old_contents;
        return $this;
    }
}

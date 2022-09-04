<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAppendIcon
{
    protected $append_icon = '';

    public function getAppendIcon(): string
    {
        return $this->append_icon;
    }

    public function setAppendIcon(string $append_icon): self
    {
        $this->append_icon = $append_icon;
        return $this;
    }
}

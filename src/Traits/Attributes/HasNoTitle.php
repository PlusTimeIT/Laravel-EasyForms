<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNoTitle
{
    protected $noTitle = FALSE;

    public function getNoTitle(): bool
    {
        return $this->noTitle;
    }

    public function setNoTitle(bool $noTitle): self
    {
        $this->noTitle = $noTitle;

        return $this;
    }
}

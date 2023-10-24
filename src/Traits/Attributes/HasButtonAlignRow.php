<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasButtonAlignRow
{
    protected $buttonAlignRow = 'start';

    public function buttonAlignRow(): string
    {
        return $this->buttonAlignRow;
    }

    public function getButtonAlignRow(): string
    {
        return $this->buttonAlignRow;
    }

    public function setButtonAlignRow(string $buttonAlignRow): self
    {
        $this->buttonAlignRow = $buttonAlignRow;

        return $this;
    }
}

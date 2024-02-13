<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasButtonAlignRow
{
    protected string $button_align_row = 'start';

    public function buttonAlignRow(): string
    {
        return $this->button_align_row;
    }

    public function getButtonAlignRow(): string
    {
        return $this->button_align_row;
    }

    public function setButtonAlignRow(string $button_align_row): static
    {
        $this->button_align_row = $button_align_row;

        return $this;
    }
}

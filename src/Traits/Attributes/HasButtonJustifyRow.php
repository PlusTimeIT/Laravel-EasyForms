<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasButtonJustifyRow
{
    protected $buttonJustifyRow = 'center';

    public function buttonJustifyRow(): string
    {
        return $this->buttonJustifyRow;
    }

    public function getButtonJustifyRow(): string
    {
        return $this->buttonJustifyRow;
    }

    public function setButtonJustifyRow(string $buttonJustifyRow): self
    {
        $this->buttonJustifyRow = $buttonJustifyRow;
        return $this;
    }
}

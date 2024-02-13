<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRowColumnLayout
{
    protected bool $column = true;

    protected bool $row = false;

    public function getColumn(): bool
    {
        return $this->column;
    }

    public function getRow(): bool
    {
        return $this->row;
    }

    public function setColumn(bool $column): static
    {
        $this->column = $column;

        return $this;
    }

    public function setRow(bool $row): static
    {
        $this->row = $row;

        return $this;
    }
}

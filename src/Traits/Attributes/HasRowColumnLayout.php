<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRowColumnLayout
{
    protected $row = false;
    protected $column = true;

    public function getRow(): bool
    {
        return $this->row;
    }

    public function setRow(bool $row): self
    {
        $this->row = $row;

        return $this;
    }

    public function getColumn(): bool
    {
        return $this->column;
    }

    public function setColumn(bool $column): self
    {
        $this->column = $column;

        return $this;
    }
}

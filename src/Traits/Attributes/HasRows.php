<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRows
{
    protected int|string $rows = 5;

    public function getRows(): int|string
    {
        return $this->rows;
    }

    public function setRows(int|string $rows): static
    {
        $this->rows = $rows;

        return $this;
    }
}

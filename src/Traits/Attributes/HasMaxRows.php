<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxRows
{
    protected int|string $max_rows;

    public function getMaxRows(): int|string
    {
        return $this->max_rows;
    }

    public function setMaxRows(int|string $max_rows): static
    {
        $this->max_rows = $max_rows;

        return $this;
    }
}

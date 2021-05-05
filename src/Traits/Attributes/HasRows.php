<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRows
{
    protected $rows = 5;

    public function getRows(): int
    {
        return $this->rows;
    }

    public function setRows(int $rows): self
    {
        $this->rows = $rows;

        return $this;
    }
}

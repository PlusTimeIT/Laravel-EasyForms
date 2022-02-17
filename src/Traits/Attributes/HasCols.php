<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCols
{
    protected $cols = 12;

    public function getCols(): int | NULL
    {
        return $this->cols;
    }

    public function setCols(int | NULL $cols): self
    {
        $this->cols = $cols;
        return $this;
    }
}

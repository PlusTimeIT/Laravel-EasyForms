<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxErrors
{
    protected $max_errors = 1;

    public function getOutlined(): int | string
    {
        return $this->max_errors;
    }

    public function setOutlined(int | string $max_errors): self
    {
        $this->max_errors = $max_errors;

        return $this;
    }
}

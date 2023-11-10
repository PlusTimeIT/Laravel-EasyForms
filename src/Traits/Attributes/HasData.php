<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasData
{
    protected mixed $data;

    public function data(mixed $data): self
    {
        return $this->setData($data);
    }

    public function getData(): mixed
    {
        return $this->data;
    }

    public function setData(mixed $data): self
    {
        $this->data = $data;

        return $this;
    }
}

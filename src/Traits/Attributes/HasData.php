<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasData
{
    protected mixed $data;

    public function data(mixed $data): static
    {
        return $this->setData($data);
    }

    public function getData(): mixed
    {
        return $this->data;
    }

    public function setData(mixed $data): static
    {
        $this->data = $data;

        return $this;
    }
}

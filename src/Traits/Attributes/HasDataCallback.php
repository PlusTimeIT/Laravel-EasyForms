<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDataCallback
{
    protected string $data_callback;

    public function getDataCallback(): string
    {
        return $this->data_callback;
    }

    public function setDataCallback(string $data_callback): static
    {
        $this->data_callback = $data_callback;

        return $this;
    }
}

<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Header;

trait HasHeaders
{
    protected array $headers = [];

    public function addHeaders(Header $header): static
    {
        $this->headers[] = $header;

        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;

        return $this;
    }
}

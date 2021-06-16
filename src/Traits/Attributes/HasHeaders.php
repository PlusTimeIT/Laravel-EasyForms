<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Header;

trait HasHeaders
{
    protected $headers = [];

    public function addHeaders(Header $header): self
    {
        $this->headers[] = $header;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;
        return $this;
    }
}

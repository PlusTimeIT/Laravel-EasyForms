<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\Header;

trait AxiosTrait
{
    public function addHeaders(Header $header): self
    {
        $this->headers[] = $header;
        return $this;
    }

    public function getExpectingResults(): bool
    {
        return $this->expecting_results;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getMultiPart(): bool
    {
        return $this->multi_part;
    }

    public static function make()
    {
        return new static();
    }

    public function setExpectingResults(bool $expecting_results): self
    {
        $this->expecting_results = $expecting_results;
        return $this;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;
        return $this;
    }

    public function setMultiPart(bool $multi_part): self
    {
        $this->multi_part = $multi_part;
        return $this;
    }

    protected $expecting_results = TRUE;

    protected $headers = [];

    protected $multi_part = FALSE;

    use Transformable;
}

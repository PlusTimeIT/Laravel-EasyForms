<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\Header;

trait AxiosTrait
{
    public function __construct(array $options)
    {
        foreach ($options as $key => $value) {
            if ( ! isset($this->{$key})) {
                continue;
            }
            $this->{$key} = $value;
        }
        return $this;
    }

    public function addHeaders(Header $header): self
    {
        $this->headers[] = $header;
        return $this;
    }

    public function getExpectingResults(): bool
    {
        return $this->expecting_reults;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getMultiPart(): bool
    {
        return $this->multi_part;
    }

    public function getNotification(): bool
    {
        return $this->notification;
    }

    public function setExpectingResults(bool $expecting_reults): self
    {
        $this->expecting_reults = $expecting_reults;
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

    public function setNotification(bool $notification): self
    {
        $this->notification = $notification;
        return $this;
    }

    protected $expecting_results = TRUE;

    protected $headers = [];

    protected $multi_part = FALSE;

    protected $notification = TRUE;

    use ConvertTraits;
}

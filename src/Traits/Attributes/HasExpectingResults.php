<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasExpectingResults
{
    protected bool $expecting_results = true;

    public function getExpectingResults(): bool
    {
        return $this->expecting_results;
    }

    public function setExpectingResults(bool $expecting_results): static
    {
        $this->expecting_results = $expecting_results;

        return $this;
    }
}

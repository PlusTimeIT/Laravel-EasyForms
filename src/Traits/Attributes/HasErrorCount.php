<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasErrorCount
{
    protected int|string $error_count = 1;

    public function getErrorCount(): int|string
    {
        return $this->error_count;
    }

    public function setErrorCount(int|string $error_count): static
    {
        $this->error_count = $error_count;

        return $this;
    }
}

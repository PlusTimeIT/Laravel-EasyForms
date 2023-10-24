<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMultiPart
{
    protected $multi_part = false;

    public function getMultiPart(): bool
    {
        return $this->multi_part;
    }

    public function setMultiPart(bool $multi_part): self
    {
        $this->multi_part = $multi_part;

        return $this;
    }
}

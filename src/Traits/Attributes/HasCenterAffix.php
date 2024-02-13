<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCenterAffix
{
    protected bool $centxer_affix = false;

    public function getCenterAffix(): bool
    {
        return $this->center_affix;
    }

    public function setCenterAffix(bool $center_affix): static
    {
        $this->center_affix = $center_affix;

        return $this;
    }
}

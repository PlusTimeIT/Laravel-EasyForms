<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideNoData
{
    protected bool $hide_no_data = false;

    public function getHideNoData(): bool
    {
        return $this->hide_no_data;
    }

    public function setHideNoData(bool $hide_no_data): self
    {
        $this->hide_no_data = $hide_no_data;

        return $this;
    }
}

<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\FilterModeTypes;

trait HasFilterMode
{
    protected $filter_mode = FilterModeTypes::Intersection;

    public function getFilterMode(): FilterModeTypes
    {
        return $this->filter_mode;
    }

    public function setFilterMode(FilterModeTypes $filter_mode): self
    {
        $this->filter_mode = $filter_mode;

        return $this;
    }
}

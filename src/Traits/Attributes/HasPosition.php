<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\PositionTypes;

trait HasPosition
{
    protected PositionTypes $position;

    public function getPosition(): PositionTypes
    {
        return $this->position;
    }

    public function setPosition(PositionTypes $position): static
    {
        $this->position = $position;

        return $this;
    }
}

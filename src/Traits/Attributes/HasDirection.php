<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\DirectionTypes;

trait HasDirection
{
    protected DirectionTypes $direction = DirectionTypes::Horizontal;

    public function getDirection(): DirectionTypes
    {
        return $this->direction;
    }

    public function setDirection(DirectionTypes $direction): static
    {
        $this->direction = $direction;

        return $this;
    }
}

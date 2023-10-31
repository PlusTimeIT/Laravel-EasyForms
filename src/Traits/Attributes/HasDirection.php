<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\DirectionTypes;

trait HasDirection
{
    protected $direction = DirectionTypes::Horizontal;

    public function getDirection(): DirectionTypes
    {
        return $this->direction;
    }

    public function setDirection(DirectionTypes $direction): self
    {
        $this->direction = $direction;

        return $this;
    }
}

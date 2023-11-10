<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\LocationTypes;

trait HasLocation
{
    protected LocationTypes $location = LocationTypes::Bottom;

    public function getLocation(): LocationTypes
    {
        return $this->location;
    }

    public function location(): LocationTypes
    {
        return $this->location;
    }

    public function setLocation(LocationTypes $location): self
    {
        $this->location = $location;

        return $this;
    }
}

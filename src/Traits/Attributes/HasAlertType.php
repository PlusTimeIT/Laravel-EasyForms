<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\AlertTypes;

trait HasAlertType
{
    protected AlertTypes $type = AlertTypes::Info;

    public function getType(): AlertTypes
    {
        return $this->type;
    }

    public function setType(AlertTypes $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function type(): AlertTypes
    {
        return $this->type;
    }
}

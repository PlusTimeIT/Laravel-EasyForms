<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\AlertTypes;

trait HasType
{
    protected $type;

    public function getType(): AlertTypes
    {
        return $this->type;
    }

    public function setType(AlertTypes $type): self
    {
        $this->type = $type;

        return $this;
    }
}

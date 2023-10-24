<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasId
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}

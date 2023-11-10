<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRole
{
    protected string $role;

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }
}

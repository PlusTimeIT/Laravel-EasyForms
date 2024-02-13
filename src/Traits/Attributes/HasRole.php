<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRole
{
    protected string $role;

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }
}

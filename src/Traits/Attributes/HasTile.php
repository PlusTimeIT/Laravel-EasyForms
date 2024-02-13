<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTile
{
    protected bool $tile = true;

    public function getTile(): bool
    {
        return $this->tile;
    }

    public function setTile(bool $tile): static
    {
        $this->tile = $tile;

        return $this;
    }
}

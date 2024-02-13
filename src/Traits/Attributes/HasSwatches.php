<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSwatches
{
    protected bool $show_swatches = false;

    protected array $swatches = [];

    protected string|int $swatches_max_height = 150;

    public function getShowSwatches(): bool
    {
        return $this->show_swatches;
    }

    public function getSwatches(): array
    {
        return $this->swatches;
    }

    public function getSwatchesMaxHeight(): string|int
    {
        return $this->swatches_max_height;
    }

    public function setShowSwatches(bool $show_swatches): static
    {
        $this->show_swatches = $show_swatches;

        return $this;
    }

    public function setSwatches(array $swatches): static
    {
        $this->swatches = $swatches;

        return $this;
    }

    public function setSwatchesMaxHeight(string|int $swatches_max_height): static
    {
        $this->swatches_max_height = $swatches_max_height;

        return $this;
    }
}

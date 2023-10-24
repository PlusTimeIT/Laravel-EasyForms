<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSwatches
{
    protected $show_swatches = false;

    protected $swatches = [];

    protected $swatches_max_height = 150;

    public function getShowSwatches(): bool
    {
        return $this->show_swatches;
    }

    public function getSwatches(): array
    {
        return $this->swatches;
    }

    public function getSwatchesMaxHeight(): bool
    {
        return $this->swatches_max_height;
    }

    public function setShowSwatches(bool $show_swatches): self
    {
        $this->show_swatches = $show_swatches;

        return $this;
    }

    public function setSwatches(array $swatches): string|int
    {
        $this->swatches = $swatches;

        return $this;
    }

    public function setSwatchesMaxHeight(string|int $swatches_max_height): self
    {
        $this->swatches_max_height = $swatches_max_height;

        return $this;
    }
}

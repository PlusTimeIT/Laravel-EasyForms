<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Button;

trait HasButtons
{
    protected array $buttons = [];

    public function addButton(Button $button): static
    {
        $this->buttons[] = $button;

        return $this;
    }

    public function getButtons(): array
    {
        return $this->buttons;
    }

    public function setButtons(array $buttons): static
    {
        $this->buttons = $buttons;

        return $this->sortButtons();
    }

    public function sortButtons(): static
    {
        $this->buttons = collect($this->buttons)->sortBy([fn ($a, $b) => $a->getOrder() <=> $b->getOrder()])->toArray();

        return $this;
    }
}

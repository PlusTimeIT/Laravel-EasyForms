<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Button;

trait HasButtons
{
    protected array $buttons = [];

    public function addButton(Button $button): self
    {
        $this->buttons[] = $button;

        return $this;
    }

    public function getButtons(): array
    {
        return $this->buttons;
    }

    public function setButtons(array $buttons): self
    {
        $this->buttons = $buttons;

        return $this->sortButtons();
    }

    public function sortButtons(): self
    {
        $this->buttons = collect($this->buttons)->sortBy([fn ($a, $b) => $a->getOrder() <=> $b->getOrder()])->toArray();

        return $this;
    }
}

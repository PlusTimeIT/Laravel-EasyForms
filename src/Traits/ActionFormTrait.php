<?php
namespace PlusTimeIT\EasyForms\Traits;

trait ActionFormTrait
{
    public function actions(): array
    {
        return [];
    }

    public function getCallback(): string
    {
        return $this->callback;
    }

    public function getInline(): bool
    {
        return $this->inline;
    }

    public function setActions(array $actions): self
    {
        $this->actions = $actions;
        return $this;
    }

    public function setCallback(string $callback): self
    {
        $this->callback = $callback;
        return $this;
    }

    public function setInline(bool $inline): self
    {
        $this->inline = $inline;
        return $this;
    }
}

<?php
namespace PlusTimeIT\EasyForms\Traits;

trait ActionFormTrait
{
    protected $actions = [];

    protected $callback;

    protected $form_type = 'action';

    protected $inline;

    protected $justify = 'center';

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

    public function getJustify(): string
    {
        return $this->justify;
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

    public function setJustify(string $justify): self
    {
        $this->justify = $justify;
        return $this;
    }
}

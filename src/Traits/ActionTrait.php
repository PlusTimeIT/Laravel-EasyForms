<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\{Axios, Button};

trait ActionTrait
{
    public function __construct(array $buttons, array $alerts, Axios $axios)
    {
        $this->buttons = $buttons;
        $this->alerts = $alerts;
        $this->axios = $axios;
        return $this->sortButtons();
    }

    public function addButton(Button $button): self
    {
        $this->buttons[] = $button;
        return $this;
    }

    public function getAlerts(): array
    {
        return $this->alerts;
    }

    public function getAxios(): string
    {
        return $this->axios;
    }

    public function getButtons(): string
    {
        return $this->buttons;
    }

    public function setAlerts(array $alerts): self
    {
        $this->alerts = $alerts;
        return $this;
    }

    public function setAxios(Axios $axios): self
    {
        $this->axios = $axios;
        return $this;
    }

    public function setButtons(array $buttons): self
    {
        $this->buttons = $buttons;
        return $this->sortButtons();
    }

    public function sortButtons(): self
    {
        $this->buttons = collect($this->buttons)->sortBy([fn($a, $b) => $a->getOrder() <=> $b->getOrder()])->toArray();
        return $this;
    }

    protected $alerts = [];

    protected $axios;

    protected $buttons = [];

    use Transformable;
}

<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\Axios;

trait InputFormTrait
{
    public function getAxios(): Axios
    {
        return $this->axios;
    }

    public function getButtons(): array
    {
        return $this->buttons;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setAxios(Axios $axios): self
    {
        $this->axios = $axios;
        return $this;
    }

    public function setButtons(array $buttons): self
    {
        $this->buttons = $buttons;
        return $this;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this->sortFields();
    }

    public function sortFields(): self
    {
        $this->fields = collect($this->fields)->sortBy([fn($a, $b) => $a->getOrder() <=> $b->getOrder()])->toArray();
        return $this;
    }
}

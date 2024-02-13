<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\AdditionalData;

trait HasAdditionalData
{
    /** @var AdditionalData[] */
    protected array $additional_data = [];

    /** @var AdditionalData[] */
    protected array $additional_load_data = [];

    public function additionalData(): array
    {
        return $this->getAdditionalData();
    }

    public function additionalLoadData(): array
    {
        return $this->getAdditionalLoadData();
    }

    public function getAdditionalData(): array
    {
        return $this->additional_data;
    }

    public function getAdditionalLoadData(): array
    {
        return $this->additional_load_data;
    }

    public function setAdditionalData(array $additional_data): static
    {
        $this->additional_data = $additional_data;

        return $this;
    }

    public function setAdditionalLoadData(array $additional_load_data): static
    {
        $this->additional_load_data = $additional_load_data;

        return $this;
    }
}

<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDataSiteKey
{
    protected string $data_site_key;

    public function getDataSiteKey(): string
    {
        return $this->data_site_key;
    }

    public function setDataSiteKey(string $data_site_key): static
    {
        $this->data_site_key = $data_site_key;

        return $this;
    }
}

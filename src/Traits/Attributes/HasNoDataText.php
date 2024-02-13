<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNoDataText
{
    protected string $no_data_text = '$vuetify.noDataText';

    public function getNoDataText(): string
    {
        return $this->no_data_text;
    }

    public function setNoDataText(string $no_data_text): static
    {
        $this->no_data_text = $no_data_text;

        return $this;
    }
}

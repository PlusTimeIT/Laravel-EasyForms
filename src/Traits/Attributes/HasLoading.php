<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait Hasloading
{
    protected $loading = FALSE;

    public function getLoading(): bool | string
    {
        return $this->loading;
    }

    public function setLoading(bool | string $loading): self
    {
        $this->loading = $loading;
        return $this;
    }
}

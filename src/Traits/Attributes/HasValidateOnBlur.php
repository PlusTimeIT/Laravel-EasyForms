<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasValidateOnBlur
{
    protected $validate_on_blur = FALSE;

    public function getValidateOnBlur(): bool
    {
        return $this->validate_on_blur;
    }

    public function setValidateOnBlur(bool $validate_on_blur): self
    {
        $this->validate_on_blur = $validate_on_blur;

        return $this;
    }
}
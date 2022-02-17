<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideSliders
{
    protected $hide_sliders = FALSE;

    public function getHideSliders(): bool
    {
        return $this->hide_sliders;
    }

    public function setHideSliders(bool $hide_sliders): self
    {
        $this->hide_sliders = $hide_sliders;
        return $this;
    }
}

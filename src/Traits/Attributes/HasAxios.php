<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Axios;

trait HasAxios
{
    protected $axios;

    public function axios(): Axios
    {
        return Axios::make();
    }

    public function getAxios(): Axios
    {
        return $this->axios;
    }

    public function setAxios(Axios $axios): self
    {
        $this->axios = $axios;
        return $this;
    }
}

<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasData
{
    protected $data;

    public function data($data): self
    {
        return $this->setData($data);
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }
}

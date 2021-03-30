<?php
namespace PlusTimeIT\EasyForms\Traits;

trait AxiosResponseTrait
{
    public function getData()
    {
        return $this->data;
    }

    public function getResult(): bool
    {
        return $this->result;
    }

    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }

    public function setResult(bool $result): self
    {
        $this->result = $result;
        return $this;
    }

    protected $data;

    protected $loader;

    protected $result;
}

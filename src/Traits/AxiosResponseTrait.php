<?php
namespace PlusTimeIT\EasyForms\Traits;

trait AxiosResponseTrait
{
    public function data($data): self
    {
        return $this->setData($data);
    }

    public function failed()
    {
        return $this->setResult(FALSE);
    }

    public function redirect($redirect)
    {
        return $this->setRedirect($redirect);
    }

    public function getData()
    {
        return $this->data;
    }

    public function getRedirect()
    {
        return $this->redirect;
    }

    public function getLoader(): bool
    {
        return $this->loader;
    }

    public function getResult(): bool
    {
        return $this->result;
    }

    public function keepLoader()
    {
        return $this->setLoader(TRUE);
    }

    public static function make()
    {
        return ( new static() )->setLoader(FALSE);
    }

    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }

    public function setLoader(bool $loader): self
    {
        $this->loader = $loader;
        return $this;
    }

    public function setResult(bool $result): self
    {
        $this->result = $result;
        return $this;
    }

    public function setRedirect($redirect): self
    {
        $this->redirect = $redirect;
        return $this;
    }

    public function success()
    {
        return $this->setResult(TRUE);
    }

    protected $data;

    protected $loader;

    protected $result;

    protected $redirect;
}

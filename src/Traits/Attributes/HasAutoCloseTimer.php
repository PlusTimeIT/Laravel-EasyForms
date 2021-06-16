<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAutoCloseTimer
{
    protected $auto_close_timer = 0;

    public function getAutoCloseTimer(): int
    {
        return $this->auto_close_timer;
    }

    public function setAutoCloseTimer(int $auto_close_timer): self
    {
        $this->auto_close_timer = $auto_close_timer;
        return $this;
    }
}
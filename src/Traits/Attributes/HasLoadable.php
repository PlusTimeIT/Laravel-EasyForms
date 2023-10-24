<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLoadable
{
    protected $loadable;

    public function load($args)
    {
        return call_user_func($this->loadable, $args);
    }

    public function loadItems(\Closure $closure): self
    {
        $this->loadable = $closure;

        return $this;
    }
}

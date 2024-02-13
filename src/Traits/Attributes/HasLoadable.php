<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLoadable
{
    protected \Closure $loadable;

    public function load($args): array
    {
        return call_user_func($this->loadable, $args);
    }

    public function loadItems(\Closure $closure): static
    {
        $this->loadable = $closure;

        return $this;
    }
}

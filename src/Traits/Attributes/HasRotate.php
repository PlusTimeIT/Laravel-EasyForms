<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRotate
{
    protected string|int $rotate = 0;

    public function getRotate(): string|int
    {
        return $this->rotate;
    }

    public function rotate(): string|int
    {
        return $this->rotate;
    }

    public function setRotate(string|int $rotate): static
    {
        $this->rotate = $rotate;

        return $this;
    }
}

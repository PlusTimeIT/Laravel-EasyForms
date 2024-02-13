<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface HeaderInterface
{
    public function getKey(): string;

    public function getValue(): mixed;

    public function setKey(string $string): static;

    public function setValue(mixed $value): static;

    public function toArray(): array;

    public function toJson(): string;
}

<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface InputFormInterface
{
    public function buttons(): array;

    public function fields(): array;

    public function getFields(): array;

    public function setFields(array $fields): static;

    public function sortFields(): static;

    public function toArray(): array;

    public function toJson(): string;
}

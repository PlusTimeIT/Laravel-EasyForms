<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface ActionFormInterface
{
    public function actions(): array;

    public function getInline(): bool;

    public function setActions(array $actions): static;

    public function setInline(bool $inline): static;

    public function toArray(): array;

    public function toJson(): string;
}

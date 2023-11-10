<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface AxiosResponseInterface
{
    public function getData(): mixed;

    public function getResult(): bool;

    public function setData(mixed $data);

    public function setOptions(array $options);

    public function setResult(bool $results);

    public function toArray(): array;

    public function toJson(): string;
}

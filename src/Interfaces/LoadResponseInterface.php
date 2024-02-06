<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface LoadResponseInterface
{
    public function getForm(): \PlusTimeIT\EasyForms\Base\InputForm|\PlusTimeIT\EasyForms\Base\ActionForm|null;

    public function getResult(): bool;

    public function result(): bool;

    public function setForm(\PlusTimeIT\EasyForms\Base\InputForm|\PlusTimeIT\EasyForms\Base\ActionForm $form);

    public function setOptions(array $options);

    public function setResult(bool $results);

    public function toArray(): array;

    public function toJson(): string;
}

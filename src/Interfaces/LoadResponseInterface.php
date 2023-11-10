<?php

namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Base\ActionForm;
use PlusTimeIT\EasyForms\Base\InputForm;

interface LoadResponseInterface
{
    public function getForm(): InputForm|ActionForm|null;

    public function getResult(): bool;

    public function result(): bool;

    public function setForm(InputForm|ActionForm $form);

    public function setOptions(array $options);

    public function setResult(bool $results);

    public function toArray(): array;

    public function toJson(): string;
}

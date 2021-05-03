<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Elements\Axios;

interface InputFormInterface
{

    public function buttons(): array;

    public function fields(): array;

    public function getFields(): array;

    public function setFields(array $fields): self;

    public function sortFields(): self;

    public function toArray();

    public function toJson();
}

<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Elements\Axios;

interface InputFormInterface
{
    public function axios(): Axios;

    public function buttons(): array;

    public function fields(): array;

    public function getAxios(): Axios;

    public function getFields(): array;

    public function setAxios(Axios $axios): self;

    public function setFields(array $fields): self;

    public function sortFields(): self;

    public function toArray();

    public function toJson();
}

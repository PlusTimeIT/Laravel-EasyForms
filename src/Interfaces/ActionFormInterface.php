<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Elements\Axios;

interface ActionFormInterface
{

    public function actions(): array;

    public function getInline(): bool;

    public function setActions(array $actions): self;

    public function setInline(bool $inline): self;

    public function toArray();

    public function toJson();
}

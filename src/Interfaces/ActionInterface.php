<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface ActionInterface
{
    public function addButton(\PlusTimeIT\EasyForms\Elements\Button $button);

    public function getAlerts(): array;

    public function getAxios();

    public function setAlerts(array $alerts);

    public function setAxios(\PlusTimeIT\EasyForms\Elements\Axios $axios);

    public function setButtons(array $buttons);

    public function toArray(): array;

    public function toJson(): string;
}

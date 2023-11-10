<?php

namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Elements\Axios;
use PlusTimeIT\EasyForms\Elements\Button;

interface ActionInterface
{
    public function addButton(Button $button);

    public function getAlerts(): array;

    public function getAxios();

    public function setAlerts(array $alerts);

    public function setAxios(Axios $axios);

    public function setButtons(array $buttons);

    public function toArray(): array;

    public function toJson(): string;
}

<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Elements\{Axios, Button};

interface ActionInterface
{
    public function addButton(Button $button);

    public function getAxios();

    public function getButtons();

    public function setAxios(Axios $axios);

    public function setButtons(array $buttons);

    public function toArray();

    public function toJson();
}

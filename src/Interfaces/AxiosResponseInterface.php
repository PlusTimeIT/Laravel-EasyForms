<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface AxiosResponseInterface
{
    public function getData();

    public function getResult();

    public function setData($data);

    public function setOptions(array $options);

    public function setResult(bool $results);

    public function toArray();

    public function toJson();
}

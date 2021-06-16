<?php
namespace PlusTimeIT\EasyForms\Interfaces;

interface ProcessResponseInterface
{
    public function getData();

    public function getResult();

    public function result();

    public function setData($data);

    public function setOptions(array $options);

    public function setResult(bool $results);

    public function toArray();

    public function toJson();
}

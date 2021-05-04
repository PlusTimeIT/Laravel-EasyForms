<?php
namespace PlusTimeIT\EasyForms\Interfaces;

interface HeaderInterface
{
    public function getKey();

    public function getValue();

    public function setKey(string $string);

    public function setValue($value);

    public function toArray();

    public function toJson();
}

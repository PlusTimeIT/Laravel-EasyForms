<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use Illuminate\Http\Request;

interface FormInterface
{
    public function fill(array $data);

    public function getName();

    public function getTitle();

    public function load();

    public function process(request $request);

    public function setName(string $name);

    public function setTitle(string $title);

    public function toArray();

    public function toJson();
}

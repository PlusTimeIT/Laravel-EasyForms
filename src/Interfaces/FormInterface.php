<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use Illuminate\Http\Request;

interface FormInterface
{
    public function alerts();

    public static function fill(request $request);

    public function getName();

    public function getTitle();

    public static function make();

    public static function process(request $request);

    public function setName(string $name);

    public function setTitle(string $title);

    public function toArray();

    public function toJson();
}

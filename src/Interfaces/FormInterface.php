<?php

namespace PlusTimeIT\EasyForms\Interfaces;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Elements\Axios;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;

interface FormInterface
{
    public function alerts();

    public function axios(): Axios;

    public static function fill(request $request);

    public function getAxios(): Axios;

    public function getName();

    public function getTitle();

    public static function make();

    public static function process(request $request): ProcessResponse;

    public function setAxios(Axios $axios): self;

    public function setName(string $name);

    public function setTitle(string $title);

    public function toArray();

    public function toJson();
}

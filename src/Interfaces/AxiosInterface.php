<?php

namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Elements\Header;

interface AxiosInterface
{
    public function addHeaders(Header $header);

    public function getExpectingResults();

    public function getHeaders();

    public function getMultiPart();

    public static function make();

    public function setExpectingResults(bool $expecting_results);

    public function setHeaders(array $headers);

    public function setMultiPart(bool $multi_part);

    public function setOptions(array $options);

    public function toArray();

    public function toJson();
}

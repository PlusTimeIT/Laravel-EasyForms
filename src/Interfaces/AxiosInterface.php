<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface AxiosInterface
{
    public function addHeaders(\PlusTimeIT\EasyForms\Elements\Header $header);

    public function getExpectingResults(): bool;

    public function getHeaders(): array;

    public function getMultiPart(): bool;

    public static function make(): static;

    public function setExpectingResults(bool $expecting_results);

    public function setHeaders(array $headers);

    public function setMultiPart(bool $multi_part);

    public function setOptions(array $options);

    public function toArray(): array;

    public function toJson(): string;
}

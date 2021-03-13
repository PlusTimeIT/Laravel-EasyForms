<?php
namespace PlusTimeIT\EasyForms\Interfaces;

use PlusTimeIT\EasyForms\Elements\{Axios, Button, Header};

interface AxiosInterface
{
    public function addHeaders(Header $header);

    public function getExpectingResults();

    public function getHeaders();

    public function getMultiPart();

    public function getNotification();

    public function setExpectingResults(bool $expecting_reults);

    public function setHeaders(array $headers);

    public function setMultiPart(bool $multi_part);

    public function setNotification(bool $notification);

    public function setOptions(array $options);

    public function toArray();

    public function toJson();
}

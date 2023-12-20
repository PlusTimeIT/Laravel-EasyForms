<?php

namespace PlusTimeIT\EasyForms\Interfaces;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Elements\Axios;
use PlusTimeIT\EasyForms\Elements\LoadResponse;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;

interface FormInterface
{
    public function additionalData(): array;

    public function additionalLoadData(): array;

    public function alerts(): array;

    public function axios(): Axios;

    public function getAdditionalData(): array;

    public function getAdditionalLoadData(): array;

    public function getAlerts(): array;

    public function getAxios(): Axios;

    public function getName(): string;

    public function getShowTitle(): bool;

    public function getTitle(): string;

    public static function load(request $request): LoadResponse;

    public static function make(): self;

    public static function process(request $request): ProcessResponse;

    public function setAdditionalData(array $additional_data): self;

    public function setAdditionalLoadData(array $additional_load_data): self;

    public function setAlerts(array $alerts): self;

    public function setAxios(Axios $axios): self;

    public function setName(string $name);

    public function setShowTitle(bool $show_title): self;

    public function setTitle(string $title);

    public function toArray(): array;

    public function toJson(): string;
}

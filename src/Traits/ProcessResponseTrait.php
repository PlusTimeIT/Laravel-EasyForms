<?php
namespace PlusTimeIT\EasyForms\Traits;

trait ProcessResponseTrait
{
    use Attributes\HasData;
    use Attributes\HasRedirect;
    use Attributes\HasResult;

    public static function make(): self
    {
        return new static();
    }
}

<?php
namespace PlusTimeIT\EasyForms\Traits;

trait AxiosTrait
{
    use Attributes\HasExpectingResults;
    use Attributes\HasHeaders;
    use Attributes\HasMultiPart;
    use Transformable;

    public static function make()
    {
        return new static();
    }
}

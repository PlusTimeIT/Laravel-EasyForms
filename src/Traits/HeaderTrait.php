<?php
namespace PlusTimeIT\EasyForms\Traits;

trait HeaderTrait
{
    use Attributes\HasKey;
    use Attributes\HasValue;
    use Transformable;

    public function __construct(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        return $this;
    }
}

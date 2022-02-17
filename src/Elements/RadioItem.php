<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasColor,
    HasLabel,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class RadioItem
{
    use Creatable;
    use HasColor;
    use HasLabel;
    use HasValue;
    use Transformable;
}

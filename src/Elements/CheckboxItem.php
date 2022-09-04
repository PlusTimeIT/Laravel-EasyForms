<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasColor,
    HasCols,
    HasLabel,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class CheckboxItem
{
    use Creatable;
    use HasColor;
    use HasCols;
    use HasLabel;
    use HasValue;
    use Transformable;
}

<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasColor,
    HasCols,
    HasId,
    HasLabel,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class CheckboxItem
{
    use Creatable;
    use HasColor;
    use HasCols;
    use HasId;
    use HasLabel;
    use HasValue;
    use Transformable;
}

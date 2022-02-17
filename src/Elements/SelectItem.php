<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasId,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class SelectItem
{
    use Creatable;
    use HasId;
    use HasValue;
    use Transformable;
}

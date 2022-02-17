<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasName,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class RuleItem
{
    use Creatable;
    use HasName;
    use HasValue;
    use Transformable;
}

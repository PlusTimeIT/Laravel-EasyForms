<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasName;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Rule Items to help provide conformity on frontend and laravel Validation.
 */
class RuleItem
{
    use Creatable;
    use HasName;
    use HasValue;
    use Transformable;
}

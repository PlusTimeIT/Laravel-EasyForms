<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMinMax;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStep;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a number input field in a form.
 *
 * @extends EasyField
 */
class NumberField extends EasyField
{
    use HasMinMax;
    use HasStep;
    use Transformable;

    protected $component = 'v-text-field';

    protected $component_type = 'number';

    protected $type = 'number';
}

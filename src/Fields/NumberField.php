<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a number input field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class NumberField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMinMax;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStep;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-text-field';

    protected string $component_type = 'number';

    protected string $type = 'number';
}

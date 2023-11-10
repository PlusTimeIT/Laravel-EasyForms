<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a checkbox input field.
 *
 * @extends EasyField
 */
class CheckboxField extends EasyField
{
    use Transformable;

    protected string $component = 'v-checkbox';

    protected string $discriminator = 'CheckboxField';

    protected string $type = 'checkbox';
}

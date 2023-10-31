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

    protected $component = 'v-checkbox';

    protected $discriminator = 'CheckboxField';

    protected $type = 'checkbox';
}

<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a checkbox input field.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class CheckboxField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-checkbox';

    protected string $discriminator = 'CheckboxField';

    protected string $type = 'checkbox';
}

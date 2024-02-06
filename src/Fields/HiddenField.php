<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a hidden input field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class HiddenField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-text-field';

    protected string $component_type = 'hidden';

    protected string $type = 'hidden';
}

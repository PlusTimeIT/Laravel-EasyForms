<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a hidden input field in a form.
 *
 * @extends EasyField
 */
class HiddenField extends EasyField
{
    use Transformable;

    protected $component = 'v-text-field';

    protected $component_type = 'hidden';

    protected $type = 'hidden';
}

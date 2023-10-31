<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMasking;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxLength;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a text input field in a form.
 *
 * @extends EasyField
 */
class TextField extends EasyField
{
    use HasCounter;
    use HasMasking;
    use HasMaxLength;
    use Transformable;

    protected $component = 'v-text-field';

    protected $discriminator = 'TextField';

    protected $type = 'text';
}

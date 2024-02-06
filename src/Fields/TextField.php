<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a text input field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class TextField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMasking;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMaxLength;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-text-field';

    protected string $discriminator = 'TextField';

    protected string $type = 'text';
}

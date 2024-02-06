<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a textarea input field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class TextareaField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasAutoGrow;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMaxRows;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasNoResize;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasReverse;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasRows;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-textarea';

    protected string $discriminator = 'TextareaField';

    protected string $type = 'textarea';
}

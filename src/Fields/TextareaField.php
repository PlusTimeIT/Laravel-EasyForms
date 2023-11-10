<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAutoGrow;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxRows;
use PlusTimeIT\EasyForms\Traits\Attributes\HasNoResize;
use PlusTimeIT\EasyForms\Traits\Attributes\HasReverse;
use PlusTimeIT\EasyForms\Traits\Attributes\HasRows;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a textarea input field in a form.
 *
 * @extends EasyField
 */
class TextareaField extends EasyField
{
    use HasAutoGrow;
    use HasCounter;
    use HasMaxRows;
    use HasNoResize;
    use HasRows;
    use HasReverse;
    use Transformable;

    protected string $component = 'v-textarea';

    protected string $discriminator = 'TextareaField';

    protected string $type = 'textarea';
}

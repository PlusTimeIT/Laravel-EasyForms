<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasErrorMessages;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLowerCase;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMinLength;
use PlusTimeIT\EasyForms\Traits\Attributes\HasNumbers;
use PlusTimeIT\EasyForms\Traits\Attributes\HasSpecial;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthErrorColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthErrorText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthSuccessColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthSuccessText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthWarningColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthWarningText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTextField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasUpperCase;
use PlusTimeIT\EasyForms\Traits\Attributes\HasViewMode;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a password input field in a form.
 *
 * @extends EasyField
 */
class PasswordField extends EasyField
{
    use Creatable;
    use HasErrorMessages;
    use HasLowerCase;
    use HasMinLength;
    use HasNumbers;
    use HasSpecial;
    use HasStrengthErrorColor;
    use HasStrengthErrorText;
    use HasStrengthSuccessColor;
    use HasStrengthSuccessText;
    use HasStrengthWarningColor;
    use HasStrengthWarningText;
    use HasTextField;
    use HasUpperCase;
    use HasViewMode;
    use Transformable;

    protected string $component = 'easy-password';

    protected string $discriminator = 'PasswordField';

    protected string $type = 'password';

    public function __construct(array $args)
    {
        parent::__construct($args);
    }
}

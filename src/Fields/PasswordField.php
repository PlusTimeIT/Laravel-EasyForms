<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasErrorMessages;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLowerCase;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMinLength;
use PlusTimeIT\EasyForms\Traits\Attributes\HasNumbers;
use PlusTimeIT\EasyForms\Traits\Attributes\HasShowRequirementsDialog;
use PlusTimeIT\EasyForms\Traits\Attributes\HasShowStrengthBar;
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
    use HasShowRequirementsDialog;
    use HasShowStrengthBar;
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
        // some properties can be passed via args in intialization
        // but when chained with functions this will not trigger.
        parent::__construct($args);
        $this->initializeTextfield();

    }

    protected function initializeTextfield(): void
    {
        // if textfield is not intialized then intialize
        if (! isset($this->textfield) || ! $this->textfield instanceof TextField) {
            $tempTextfield = $this->toArray();
            // remove component specific properties
            unset($tempTextfield['component']);
            unset($tempTextfield['component_type']);
            unset($tempTextfield['discriminator']);
            unset($tempTextfield['type']);

            // set textfield name and label
            $tempTextfield['name'] = ($args['name'] ?? 'password');
            $tempTextfield['label'] = $args['label'] ?? 'Password';

            $this->textfield = TextField::make($tempTextfield);
        }

    }
}

<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a password input field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class PasswordField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasErrorMessages;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasLowerCase;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMinLength;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasNumbers;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasShowRequirementsDialog;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasShowStrengthBar;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSpecial;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthErrorColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthErrorText;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthSuccessColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthSuccessText;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthWarningColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStrengthWarningText;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTextField;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasUpperCase;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasViewMode;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'easy-password';

    protected string $discriminator = 'PasswordField';

    protected string $type = 'password';

    public function __construct(array $args)
    {
        // some properties can be passed via args in initialization
        // but when chained with functions this will not trigger.
        parent::__construct($args);
        $this->initializeTextfield();
    }

    protected function initializeTextfield(): void
    {
        // if textfield is not initialized then initialize
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

<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a switch field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class SwitchField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasAppendIcon;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasBackgroundColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDark;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDensity;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDisabled;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDisplay;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasError;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasErrorCount;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasErrorMessages;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasFalseValue;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasFlat;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHideDetails;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHideSpinButtons;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHint;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasId;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasInputValue;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasInset;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasLabel;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasLight;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasLoading;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMessages;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasPersistentHint;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasPrependIcon;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasReadOnly;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSuccess;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSuccessMessages;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTrueValue;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasValidateOnBlur;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-switch';

    protected string $discriminator = 'SwitchField';
}

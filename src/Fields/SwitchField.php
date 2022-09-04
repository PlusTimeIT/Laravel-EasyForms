<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasAppendIcon,
    HasBackgroundColor,
    HasColor,
    HasDark,
    HasDense,
    HasDisabled,
    HasError,
    HasErrorCount,
    HasErrorMessages,
    HasFalseValue,
    HasFlat,
    HasHideDetails,
    HasHideSpinButtons,
    HasHint,
    HasId,
    HasInputValue,
    HasInset,
    HasLabel,
    HasLight,
    HasMessages,
    HasMultiple,
    HasPersistentHint,
    HasPrependIcon,
    HasReadOnly,
    HasSuccess,
    HasSuccessMessages,
    HasTrueValue,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\Transformable;

class SwitchField extends EasyField
{
    use HasAppendIcon;
    use HasBackgroundColor;
    use HasColor;
    use HasDark;
    use HasDense;
    use HasDisabled;
    use HasDisplay;
    use HasError;
    use HasErrorCount;
    use HasErrorMessages;
    use HasFalseValue;
    use HasFlat;
    use HasHideDetails;
    use HasHideSpinButtons;
    use HasHint;
    use HasId;
    use HasInputValue;
    use HasInset;
    use HasLabel;
    use HasLight;
    use Hasloading;
    use HasMessages;
    use HasMultiple;
    use HasPersistentHint;
    use HasPrependIcon;
    use HasReadOnly;
    use HasSuccess;
    use HasSuccessMessages;
    use HasTrueValue;
    use HasValidateOnBlur;
    use HasValue;
    use Transformable;

    protected $component = 'v-switch';
}

<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasAutoCloseTimer,
    HasBorder,
    HasColor,
    HasContents,
    HasDark,
    HasDense,
    HasDismissible,
    HasElevation,
    HasIcon,
    HasOrder,
    HasOrigin,
    HasOutlined,
    HasProminent,
    HasText,
    HasTransition,
    HasTrigger,
    HasType,
};
use PlusTimeIT\EasyForms\Traits\Transformable;

// TODO Create and implement Alert interface and trait
// Alert triggers
// before_load - Alert triggers before the form fields have loaded when supplied on page load. N/A on Axios Load.
// after_load - Alert triggers after the form fields have loaded for an axios load or shown on page load.
// failed_load - Alert triggers if form has failed to load fields.
// before_processing - Alert triggers before the axios call is made for form processing
// after_processing - Alert triggers when axios call is completed, regardless of the outcome
// failed_processing - Alert triggers on a failed axios call
// success_processing - Alert triggers on a successful axios call
// form_reset - Alert triggers when a form has been reset

class Alert
{
    use HasAutoCloseTimer;
    use HasBorder;
    use HasColor;
    use HasContents;
    use HasDark;
    use HasDense;
    use HasDismissible;
    use HasElevation;
    use HasIcon;
    use HasOrder;
    use HasOrigin;
    use HasOutlined;
    use HasProminent;
    use HasText;
    use HasTransition;
    use HasTrigger;
    use HasType;
    use Transformable;

    public function __construct()
    {
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}

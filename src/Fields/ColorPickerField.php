<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCanvasHeight;
use PlusTimeIT\EasyForms\Traits\Attributes\HasDark;
use PlusTimeIT\EasyForms\Traits\Attributes\HasDisabled;
use PlusTimeIT\EasyForms\Traits\Attributes\HasDotSize;
use PlusTimeIT\EasyForms\Traits\Attributes\HasElevation;
use PlusTimeIT\EasyForms\Traits\Attributes\HasFlat;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideCanvas;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideInputs;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideModeSwitch;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideSliders;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLight;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMode;
use PlusTimeIT\EasyForms\Traits\Attributes\HasSwatches;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Attributes\HasWidth;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a color picker field in a form.
 *
 * @extends EasyField
 */
class ColorPickerField extends EasyField
{
    use HasCanvasHeight;
    use HasDark;
    use HasDisabled;
    use HasDotSize;
    use HasElevation;
    use HasFlat;
    use HasHideCanvas;
    use HasHideInputs;
    use HasHideModeSwitch;
    use HasHideSliders;
    use HasLight;
    use HasMode;
    use HasSwatches;
    use HasValue;
    use HasWidth;
    use Transformable;

    protected $component = 'v-color-picker';

    protected $discriminator = 'ColorPickerField';

    protected $type = 'color-picker';
}

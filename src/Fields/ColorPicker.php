<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCanvasHeight;
use PlusTimeIT\EasyForms\Traits\Attributes\HasDotSize;
use PlusTimeIT\EasyForms\Traits\Attributes\HasElevation;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideCanvas;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideInputs;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideSliders;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMode;
use PlusTimeIT\EasyForms\Traits\Attributes\HasPickerBorder;
use PlusTimeIT\EasyForms\Traits\Attributes\HasPosition;
use PlusTimeIT\EasyForms\Traits\Attributes\HasRounded;
use PlusTimeIT\EasyForms\Traits\Attributes\HasSwatches;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTag;
use PlusTimeIT\EasyForms\Traits\Attributes\HasWidth;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a color picker field in a form.
 *
 * @extends EasyField
 */
class ColorPicker extends EasyField
{
    use HasCanvasHeight;
    use HasDotSize;
    use HasElevation;
    use HasHideCanvas;
    use HasHideInputs;
    use HasHideSliders;
    use HasMode;
    use HasPickerBorder;
    use HasPosition;
    use HasRounded;
    use HasSwatches;
    use HasTag;
    use HasWidth;
    use Transformable;

    protected string $component = 'v-color-picker';

    protected string $discriminator = 'ColorPicker';

    protected string $tag = 'div';
}

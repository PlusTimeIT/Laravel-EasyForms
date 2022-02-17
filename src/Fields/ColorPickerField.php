<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasCanvasHeight,
    HasDark,
    HasDisabled,
    HasDotSize,
    HasElevation,
    HasFlat,
    HasHideCanvas,
    HasHideInputs,
    HasHideModeSwitch,
    HasHideSliders,
    HasLight,
    HasMode,
    HasSwatches,
    HasValue,
    HasWidth
};
use PlusTimeIT\EasyForms\Traits\Transformable;

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

    protected $type = 'color-picker';
}

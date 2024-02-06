<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a color picker field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class ColorPicker extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCanvasHeight;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDotSize;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasElevation;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHideCanvas;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHideInputs;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHideSliders;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMode;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasPickerBorder;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasPosition;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasRounded;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSwatches;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTag;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasWidth;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-color-picker';

    protected string $discriminator = 'ColorPicker';

    protected string $tag = 'div';
}

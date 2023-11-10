<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\Icon;
use PlusTimeIT\EasyForms\Elements\PickerMenu;
use PlusTimeIT\EasyForms\Elements\Tooltip;
use PlusTimeIT\EasyForms\Traits\Attributes\HasColorPicker;
use PlusTimeIT\EasyForms\Traits\Attributes\HasPickerMenu;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTextField;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a color picker field with a textfield in a form.
 *
 * @extends EasyField
 */
class ColorPickerField extends EasyField
{
    use HasColorPicker;
    use HasPickerMenu;
    use HasTextField;
    use Transformable;

    protected string $component = 'easy-color-picker';

    protected string $discriminator = 'ColorPickerField';

    public function __construct(array $args)
    {
        parent::__construct($args);
        // check if textfield present is not create default
        if (! isset($this->textfield)) {
            $this->textfield = TextField::make()
                ->setName('picker_value')
                ->setLabel('Color Picker')
                ->setReadonly(true)
                ->setPrependInnerIcon(
                    Icon::make()
                        ->setIcon('mdi-square-rounded')
                        ->setSize('x-large')
                        ->setTooltip(
                            Tooltip::make()
                                ->setText('Select Color')
                                ->setCloseOnContentClick(false)
                                ->setActivator(true)
                        )
                );
        }

        if (! isset($this->picker)) {
            $this->picker = ColorPicker::make()->setValue('#000000');
        }

        if (! isset($this->value)) {
            $this->value = '#000000';
        }

        if (! isset($this->menu)) {
            $this->menu = PickerMenu::make();
        }
    }
}

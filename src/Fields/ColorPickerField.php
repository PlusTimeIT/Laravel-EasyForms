<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a color picker field with a textfield in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class ColorPickerField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasColorPicker;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasPickerMenu;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTextField;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'easy-color-picker';

    protected string $discriminator = 'ColorPickerField';

    public function __construct(array $args)
    {
        parent::__construct($args);
        // check if textfield present is not create default
        if (! isset($this->textfield)) {
            $this->textfield = \PlusTimeIT\EasyForms\Fields\TextField::make()
                ->setName('picker_value')
                ->setLabel('Color Picker')
                ->setReadonly(true)
                ->setPrependInnerIcon(
                    \PlusTimeIT\EasyForms\Elements\Icon::make()
                        ->setIcon('mdi-square-rounded')
                        ->setSize('x-large')
                        ->setTooltip(
                            \PlusTimeIT\EasyForms\Elements\Tooltip::make()
                                ->setText('Select Color')
                                ->setCloseOnContentClick(false)
                                ->setActivator(true)
                        )
                );
        }

        if (! isset($this->picker)) {
            $this->picker = \PlusTimeIT\EasyForms\Fields\ColorPicker::make()->setValue('#000000');
        }

        if (! isset($this->value)) {
            $this->value = '#000000';
        }

        if (! isset($this->menu)) {
            $this->menu = \PlusTimeIT\EasyForms\Elements\PickerMenu::make();
        }
    }
}

<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents an autocomplete field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class AutoCompleteField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasAnyField;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasAutoSelectFirst;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasChips;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasClosableChips;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCloseText;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDirection;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasFilterKeys;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasFilterMode;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHideNoData;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHideSelected;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasLoadable;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMenu;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasNoDataText;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasNoFilter;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasOpenOnClear;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasOpenText;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasReturnObject;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSearch;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTransition;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-autocomplete';

    protected string $discriminator = 'AutoCompleteField';

    protected string $type = 'text';
}

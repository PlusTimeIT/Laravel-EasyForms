<?php

namespace PlusTimeIT\EasyForms\Fields;

// File input Accept values
// image/*, video/*, audio/*, .doc,.pdf etc.
//
// Specifying mime types
// image/jpeg,image/png,application/msword,application/pdf
//
//

/**
 * Represents a file input field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class FileInputField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasAccept;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasPrependIcon;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasShowSize;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-file-input';

    protected string $discriminator = 'FileInputField';

    protected mixed $value = [];

    public function __construct()
    {
        $this->prepend_icon = \PlusTimeIT\EasyForms\Elements\Icon::make()->setIcon('mdi-camera');
    }
}

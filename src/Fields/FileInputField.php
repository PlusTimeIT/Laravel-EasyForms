<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\Icon;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAccept;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Attributes\HasPrependIcon;
use PlusTimeIT\EasyForms\Traits\Attributes\HasShowSize;
use PlusTimeIT\EasyForms\Traits\Transformable;

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
 * @extends EasyField
 */
class FileInputField extends EasyField
{
    use HasAccept;
    use HasCounter;
    use HasMultiple;
    use HasPrependIcon;
    use HasShowSize;
    use Transformable;

    protected string $component = 'v-file-input';

    protected string $discriminator = 'FileInputField';

    protected mixed $value = [];

    public function __construct()
    {
        $this->prepend_icon = Icon::make()->setIcon('mdi-camera');
    }
}

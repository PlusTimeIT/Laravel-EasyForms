<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\Attributes\AcceptsFiles;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Attributes\HasPrependIcon;
use PlusTimeIT\EasyForms\Traits\Attributes\HasSize;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

// File input Accept values
// image/*, video/*, audio/*, .doc,.pdf etc.
//
// Specifying mime types
// image/jpeg,image/png,application/msword,application/pdf
//
//

class FileInputField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasCounter;
    use HasMultiple;
    use HasPrependIcon;
    use HasSize;
    use AcceptsFiles;

    public const TYPE = 'file-input';

    protected $component = 'v-file-input';

    protected $type = self::TYPE;

    protected $value = [];

    public function __construct()
    {
        $this->prepend_icon = 'mdi-paperclip';
    }
}

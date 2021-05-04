<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{AcceptsFiles, HasCounter, HasMultiple, HasPrependIcon, HasSize};
use PlusTimeIT\EasyForms\Traits\Transformable;

// File input Accept values
// image/*, video/*, audio/*, .doc,.pdf etc.
//
// Specifying mime types
// image/jpeg,image/png,application/msword,application/pdf
//
//

class FileInputField extends EasyField
{
    use AcceptsFiles;
    use HasCounter;
    use HasMultiple;
    use HasPrependIcon;
    use HasSize;
    use Transformable;

    public const TYPE = 'file-input';

    protected $component = 'v-file-input';

    protected $type = self::TYPE;

    protected $value = [];

    public function __construct()
    {
        $this->prepend_icon = 'mdi-paperclip';
    }
}

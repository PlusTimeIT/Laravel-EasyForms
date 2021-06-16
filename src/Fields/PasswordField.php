<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasCounter, HasMaxLength};
use PlusTimeIT\EasyForms\Traits\Transformable;

class PasswordField extends EasyField
{
    use HasCounter;
    use HasMaxLength;
    use Transformable;

    protected $component = 'v-text-field';

    protected $component_type = 'password';

    protected $type = 'password';
}

<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasFormLoaderType;
use PlusTimeIT\EasyForms\Traits\Attributes\HasProgress;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Form Loader for frontend
 */
class FormLoader
{
    use Creatable;
    use HasFormLoaderType;
    use HasProgress;
    use Transformable;
}

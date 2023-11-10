<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * ProgressCircular element that triggers an action / function within the backend class.
 * This can be a process, reset or cancel button.
 */
class ProgressCircular
{
    use Attributes\HasClass;
    use Attributes\HasBgColor;
    use Attributes\HasColor;
    use Attributes\HasRotate;
    use Attributes\HasSize;
    use Attributes\HasTag;
    use Attributes\HasTheme;
    use Attributes\HasWidth;
    use Creatable;
    use Transformable;

    public function __construct(array $args)
    {
        // set defaults
        $this->size = 'default';
        $this->width = 4;
        $this->class = 'mx-auto my-auto text-center pa-10';
        $this->setOptions($args);
    }
}

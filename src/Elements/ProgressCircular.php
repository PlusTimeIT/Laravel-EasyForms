<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * ProgressCircular element that triggers an action / function within the backend class.
 * This can be a process, reset or cancel button.
 */
class ProgressCircular
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasBgColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasClasses;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasRotate;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSize;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTag;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTheme;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasWidth;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    public function __construct(array $args)
    {
        // set defaults
        $this->size = 'default';
        $this->width = 4;
        $this->classes = 'mx-auto my-auto text-center pa-10';
        $this->setOptions($args);
    }
}

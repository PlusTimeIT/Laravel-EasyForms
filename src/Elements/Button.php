<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

class Button
{
    use Attributes\HasClass;
    use Attributes\HasColor;
    use Attributes\HasIcon;
    use Attributes\HasIcons;
    use Attributes\HasOrder;
    use Attributes\HasOutlined;
    use Attributes\HasRounded;
    use Attributes\HasText;
    use Attributes\HasTile;
    use Attributes\HasType;
    use Creatable;
    use Transformable;
}

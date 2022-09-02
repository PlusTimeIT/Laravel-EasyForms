<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes;
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class Button
{
    use Creatable;
    use Attributes\HasClass;
    use Attributes\HasColor;
    use Attributes\HasIcon;
    use Attributes\HasOrder;
    use Attributes\HasRounded;
    use Attributes\HasText;
    use Attributes\HasType;
    use Attributes\HasTile;
    use Attributes\HasOutlined;
    use Transformable;
}

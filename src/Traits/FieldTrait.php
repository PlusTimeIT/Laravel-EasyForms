<?php
namespace PlusTimeIT\EasyForms\Traits;

trait FieldTrait
{
    use Attributes\HasClearable;
    use Attributes\HasCols;
    use Attributes\HasComponent;
    use Attributes\HasDense;
    use Attributes\HasDependsOn;
    use Attributes\HasHelp;
    use Attributes\HasLabel;
    use Attributes\HasName;
    use Attributes\HasOrder;
    use Attributes\HasOutlined;
    use Attributes\HasPlaceholder;
    use Attributes\HasReadOnly;
    use Attributes\HasRequired;
    use Attributes\HasRules;
    use Attributes\HasTooltip;
    use Attributes\HasType;
    use Attributes\hasShowIf;
    use Attributes\HasValue;
    use Creatable;
    use Transformable;
}

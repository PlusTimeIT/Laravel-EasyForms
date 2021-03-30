<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{FieldTrait, Transformable};

class TimePickerField extends EasyField implements FieldInterface
{
    public function __construct()
    {
        return $this;
    }

    public static function make()
    {
        return new static();
    }

    protected $ampmInTitle = TRUE;

    protected $component = 'time-picker';

    protected $multiple = FALSE;

    protected $noTitle = FALSE;

    use FieldTrait;

    use Transformable;

    public const TYPE = 'time-picker';
}

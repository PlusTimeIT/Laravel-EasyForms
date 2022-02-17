<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\{Axios, Button};

trait ActionTrait
{
    use Attributes\HasAlerts;
    use Attributes\HasAxios;
    use Attributes\HasButtons;
    use Creatable;
    use Transformable;

    public function __construct(array $buttons, array $alerts, Axios $axios)
    {
        $this->buttons = $buttons;
        $this->alerts = $alerts;
        $this->axios = $axios;
        return $this->sortButtons();
    }

    public static function create(array $buttons, array $alerts, Axios $axios)
    {
        return self::make($buttons, $alerts, $axios);
    }

    public static function make(array $buttons, array $alerts, Axios $axios)
    {
        return new static($buttons, $alerts, $axios);
    }
}

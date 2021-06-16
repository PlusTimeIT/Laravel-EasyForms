<?php
namespace PlusTimeIT\EasyForms\Traits;

use PlusTimeIT\EasyForms\Elements\{Axios, Button};

trait ActionTrait
{
    use Attributes\HasAlerts;
    use Attributes\HasAxios;
    use Attributes\HasButtons;
    use Transformable;

    public function __construct(array $buttons, array $alerts, Axios $axios)
    {
        $this->buttons = $buttons;
        $this->alerts = $alerts;
        $this->axios = $axios;
        return $this->sortButtons();
    }
}

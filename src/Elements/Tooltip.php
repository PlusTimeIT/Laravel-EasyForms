<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Interfaces\TooltipInterface;
use PlusTimeIT\EasyForms\Traits\TooltipTrait;

/**
 * Vuetify Tooltip
 */
class Tooltip implements TooltipInterface
{
    use TooltipTrait;

    public function __construct(array $args)
    {
        // set defaults
        $this->open_on_hover = true;
        $this->open_on_click = false;
        $this->close_on_content_click = true;
        $this->setOptions($args);
    }
}

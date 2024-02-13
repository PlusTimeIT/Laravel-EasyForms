<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\ScrollStrategyTypes;

trait HasScrollStrategy
{
    protected ScrollStrategyTypes $scroll_strategy = ScrollStrategyTypes::Reposition;

    public function getScrollStrategy(): ScrollStrategyTypes
    {
        return $this->scroll_strategy;
    }

    public function scroll_strategy(): ScrollStrategyTypes
    {
        return $this->scroll_strategy;
    }

    public function setScrollStrategy(ScrollStrategyTypes $scroll_strategy): static
    {
        $this->scroll_strategy = $scroll_strategy;

        return $this;
    }
}

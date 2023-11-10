<?php

namespace PlusTimeIT\EasyForms\Enums;

/**
 * Available Scroll Strategy Types
 */
enum ScrollStrategyTypes: string
{
    case Block = 'block';
    case Close = 'close';
    case None = 'none';
    case Reposition = 'reposition';
}

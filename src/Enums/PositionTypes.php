<?php

namespace PlusTimeIT\EasyForms\Enums;

/**
 * Available Position Types
 */
enum PositionTypes: string
{
    case Absolute = 'absolute';
    case Fixed = 'fixed';
    case Relative = 'relative';
    case Static = 'static';
    case Sticky = 'sticky';
}

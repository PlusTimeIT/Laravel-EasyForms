<?php

namespace PlusTimeIT\EasyForms\Enums;

enum PositionTypes: string
{
    case Absolute = 'absolute';
    case Fixed = 'fixed';
    case Relative = 'relative';
    case Static = 'static';
    case Sticky = 'sticky';
}

<?php

namespace PlusTimeIT\EasyForms\Enums;

/**
 * Available Filter Mode Types
 */
enum FilterModeTypes: string
{
    case Every = 'every';
    case Intersection = 'intersection';
    case Some = 'some';
    case Union = 'union';
}

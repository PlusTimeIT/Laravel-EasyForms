<?php

namespace PlusTimeIT\EasyForms\Enums;

enum PositionTypes: string {
    case Static = "static";
    case Relative = "relative";
    case Fixed = "fixed";
    case Absolute = "absolute";
    case Sticky = "sticky";
}
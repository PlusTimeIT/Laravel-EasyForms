<?php

namespace PlusTimeIT\EasyForms\Enums;

enum TextVariantTypes: string {
    case Outlined = "outlined";
    case Plain = "plain";
    case Underlined = "underlined";
    case Filled = "filled";
    case Solo = "solo";
    case SoloInverted = "solo-inverted";
    case SoloFilled = "solo-filled";
}
<?php

namespace PlusTimeIT\EasyForms\Enums;

/**
 * Available Color Picker Modes
 */
enum ColorPickerModes: string
{
    case Hex = 'hex';
    case Hexa = 'hexa';
    case Hsl = 'hsl';
    case Hsla = 'hsla';
    case Rgb = 'rgb';
    case Rgba = 'rgba';
}

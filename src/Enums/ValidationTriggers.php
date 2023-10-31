<?php

namespace PlusTimeIT\EasyForms\Enums;

/**
 * Available Triggers for Validations
 */
enum ValidationTriggers: string
{
    case Blur = 'blur';
    case BlurLazy = 'blur lazy';
    case Input = 'input';
    case InputLazy = 'input lazy';
    case Lazy = 'lazy';
    case LazyBlur = 'lazy blur';
    case LazyInput = 'lazy input';
    case LazySubmit = 'lazy submit';
    case Submit = 'submit';
    case SubmitLazy = 'submit lazy';
}

<?php

namespace PlusTimeIT\EasyForms\Enums;

enum ValidationTriggers: string {
    case Lazy = "lazy";
    case Blur = "blur";
    case Input = "input";
    case Submit = "submit";
    case BlurLazy = "blur lazy";
    case InputLazy = "input lazy";
    case SubmitLazy = "submit lazy";
    case LazyBlur = "lazy blur";
    case LazyInput = "lazy input";
    case LazySubmit = "lazy submit";
}
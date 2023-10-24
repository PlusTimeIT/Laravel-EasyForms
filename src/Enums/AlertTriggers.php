<?php

namespace PlusTimeIT\EasyForms\Enums;

enum AlertTriggers: string
{
    case AfterLoad = 'after_load';
    case AfterProcessing = 'after_processing';
    case BeforeLoad = 'before_load';
    case BeforeProcessing = 'before_processing';
    case Cancelled = 'cancelled';
    case FailedLoad = 'failed_load';
    case FailedProcessing = 'failed_processing';
    case FormReset = 'form_reset';
    case SuccessProcessing = 'success_processing';
}

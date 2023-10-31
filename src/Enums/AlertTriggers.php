<?php

namespace PlusTimeIT\EasyForms\Enums;

/**
 * Available Triggers for Alerts
 */
enum AlertTriggers: string
{
    case AfterLoad = 'after_load';
    case AfterProcessing = 'after_processing';
    case BeforeLoad = 'before_load';
    case BeforeProcessing = 'before_processing';
    case Cancelled = 'cancelled';
    case FailedLoad = 'failed_load';
    case FailedProcessing = 'failed_processing';
    case FailedValidation = 'failed_validation';
    case FormReset = 'form_reset';
    case SuccessProcessing = 'success_processing';
}

<?php 

namespace PlusTimeIT\EasyForms\Enums;

enum AlertTriggers: string {
    case BeforeLoad = "before_load";
    case AfterLoad = "after_load";
    case FailedLoad = "failed_load";
    case BeforeProcessing = "before_processing";
    case AfterProcessing = "after_processing";
    case FailedProcessing = "failed_processing";
    case SuccessProcessing = "success_processing";
    case Cancelled = "cancelled";
    case FormReset = "form_reset";
}
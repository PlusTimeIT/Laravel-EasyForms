<?php 

namespace PlusTimeIT\EasyForms\Enums;

enum AlertTypes: string {
    case Success = "success";
    case Info = "info";
    case Warning = "warning";
    case Error = "error";
}
<?php

namespace PlusTimeIT\EasyForms\Enums;

enum AlertTypes: string
{
    case Error = 'error';
    case Info = 'info';
    case Success = 'success';
    case Warning = 'warning';
}

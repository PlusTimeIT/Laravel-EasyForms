# Installation

Install Laravel EasyForms via composer:

````bash
composer require plustime-it/laravel-easyforms
````

## Publishing Resources

For the forms to load properly you'll need to update the namespace variable in the config file. 
To get access you'll need to  run `vendor:publish`

````bash
php artisan vendor:publish --provider=PlusTimeIT\EasyForms\Providers\EasyForms
````

This will create a config file `config/easyforms.php` with the following contents:

````php
return [
    // Global options for turning off forms.
    'display' => true,
    // Prefix for load and process routes
    'prefix' => 'axios',
     // Middleware for load and process routes
    'middleware' => 'web',
    'form' => [
         // Name space for Forms.
        'namespace' => 'PlusTimeIT\EasyForms\Forms',
        // Form locations, this is also where new forms are generated
        'path' => app_path('Http/Forms'), // must not have trailing forward slash
    ],
    // Package defaults
    'defaults' => [
        'tooltip-icon' => 'mdi-help',
    ],
];
````

## Commands

To make generating forms easy, you can utilize the `make:form` command. 
All that's required is a form name (it creates an Input Form by default).
These forms will be created in `App/Http/Forms` folder.

````bash
php artisan make:form {name} {type=input}
````

Input Example:
````bash
php artisan make:form TestInputForm
````

Action Example:
````bash
php artisan make:form TestActionForm action
````

You can also supply a path, and it'll create the required directories if needed.
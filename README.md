# General Readme

Larave EasyForms is a package that makes setting up and managing forms and actions in your laravel applciation simple. All data is edited in the backend and this generates your forms on the front end. 

## Getting started
---
To ensure PlusTimeIT EasyForms runs without errors please follow below: 

Before either of those options is completed you first must:
- Open up `config/app.php` and add the code below to your `providers` array. 
```php
`PlusTimeIT\EasyForms\Providers\EasyForms::class`
```
- You should also consider adding the below code to the `alias` array aswell.
```php
'EasyForms' => PlusTimeIT\EasyForms\Providers\EasyForms::class,
```


You'll also need to run `vendor:publish`
`php artisan vendor:publish --provider=PlusTimeIT\EasyForms\Providers\EasyForms`



## Examples

Examples can be found at the following routes if the config setting is set to `TRUE` for `routes.examples`

####Home page for examples
`<yourDomain>/easyforms/example`

### Example 1 Load from Page Controller
`<yourDomain>/easyforms/example/1`

### Example 2 Load from Axios
`<yourDomain>/easyforms/example/2`

## Vue Components

Laravel EasyForms includes Vue files for easy frontend form loading, filling and processing.
These Vue files are published:
```javascript
resources/js/components/vendor/plustime-it/laravel-easyforms/FormLoader.vue
```

To use the form loader vue component you must include it in your project, you can do this globally in your main app file:
```javascript
Vue.component('form-loader', require('./components/vendor/plustime-it/laravel-easyforms/FormLoader.vue').default );
```

You can also include this locally in your Vue files:
```javascript
import FormLoader from "./components/vendor/plustime-it/laravel-easyforms/FormLoader.vue"
```

Then add to your components:
```javascript
components: {
    FormInput
}
```



## Fields

### Available fields

### Creating customer fields

## Forms

### Building forms



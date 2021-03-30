# General Readme

Laravel EasyForms is a package that makes setting up and managing forms and actions in your laravel application simple. All data is edited in the backend and this generates your forms on the front end. 

## Getting started
---
To ensure PlusTimeIT EasyForms runs without errors please follow below: 

Add Laravel Easyforms to your project:
`composer require plustime-it/laravel-easyforms`

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

## Dependancies

1. vuejs - `npm install vue@^2.5.17 --save`
2. vuetify - `npm install vuetify@^2.4.5 --save`
3. moment - `npm install moment@^2.29.1 --save`
4. axios - `npm install axios@^0.21.1 --save`
5. material design icon - `npm install @mdi/font -D --save`
6. vue-async-computed - `npm install vue-async-computed@^3.9.0 --save`
7. vee-validate - `npm install vee-validate@^3.4.5 --save`
8. v-mask - `npm install v-mask@^^2.2.4 --save`


## Examples

Examples can be found at the following routes if the config setting is set to `TRUE` for `routes.examples`

####Home page for examples
`<yourDomain>/easyforms/example`

### Example 1 Load from page with alerts Controller
`<yourDomain>/easyforms/example/1`

### Example 2 Load from Axios
`<yourDomain>/easyforms/example/2`

### Example 3 Masking
`<yourDomain>/easyforms/example/3`

## Vue Components

Laravel EasyForms includes Vue files for easy frontend form loading, filling and processing.
These Vue files are published:
```javascript
resources/js/components/vendor/plustime-it/laravel-easyforms/FormLoader.vue
resources/js/components/vendor/plustime-it/laravel-easyforms/FormInput.vue
resources/js/components/vendor/plustime-it/laravel-easyforms/custom/DatePicker.vue
resources/js/components/vendor/plustime-it/laravel-easyforms/custom/TimePicker.vue
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



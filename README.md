# Laravel EasyForms

---
Laravel EasyForms is a package that makes setting up and managing forms and actions in your laravel application simple. All data is edited in the backend and this generates your forms on the front end. 


- [Laravel EasyForms](#laravel-easyforms)
  - [Getting started](#getting-started)
  - [Current Dependencies](#current-dependencies)
  - [Examples](#examples)
    - [Home page for examples](#home-page-for-examples)
    - [Example 1 Load from page with alerts Controller](#example-1-load-from-page-with-alerts-controller)
    - [Example 2 Load from Axios](#example-2-load-from-axios)
    - [Example 3 Load from Axios with masking](#example-3-load-from-axios-with-masking)
    - [Example 4 Action form example](#example-4-action-form-example)
  - [Vue Components](#vue-components)
    - [Globally](#globally)
  - [Forms](#forms)
    - [Building forms](#building-forms)
    - [Input Forms](#input-forms)
    - [Fields](#fields)
      - [Rule Items](#rule-items)
      - [Select Items](#select-items)
      - [Available fields](#available-fields)
        - [Autocomplete](#autocomplete)
          - [Properties](#properties)
          - [Example](#example)
        - [Checkbox](#checkbox)
          - [Properties](#properties-1)
          - [Example](#example-1)
        - [Date Picker](#date-picker)
          - [Properties](#properties-2)
          - [Example](#example-2)
        - [File Input](#file-input)
          - [Properties](#properties-3)
          - [Example](#example-3)
        - [Hidden](#hidden)
          - [Properties](#properties-4)
          - [Example](#example-4)
        - [Number](#number)
          - [Properties](#properties-5)
          - [Example](#example-5)
    - [Creating a custom field example](#creating-a-custom-field-example)


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

## Current Dependencies

---
1. vuejs - `npm install vue@^2.5.17 --save`
2. vuetify - `npm install vuetify@^2.4.5 --save`
3. moment - `npm install moment@^2.29.1 --save`
4. axios - `npm install axios@^0.21.1 --save`
5. material design icon - `npm install @mdi/font -D --save`
6. vue-async-computed - `npm install vue-async-computed@^3.9.0 --save`
7. vee-validate - `npm install vee-validate@^3.4.5 --save`
8. v-mask - `npm install v-mask@^2.2.4 --save`
9. laravel-vue-easyforms - `npm install laravel-vue-easyforms@^0.0.35 --save`


## Examples

---
Examples can be found at the following routes if the config setting is set to `TRUE` for `routes.examples`

### Home page for examples
`<yourDomain>/easyforms/example`

### Example 1 Load from page with alerts Controller
`<yourDomain>/easyforms/example/1`

### Example 2 Load from Axios
`<yourDomain>/easyforms/example/2`

### Example 3 Load from Axios with masking
`<yourDomain>/easyforms/example/3`

### Example 4 Action form example
`<yourDomain>/easyforms/example/4`

## Vue Components

### Globally 
```
import LaravelVueEasyforms from 'laravel-vue-easyforms';
Vue.use( LaravelVueEasyforms );
```

You can then start using it in your components `<form-loader load_form"formname"></form-loader>`

## Forms

---

### Building forms

### Input Forms

Input forms are used for creating and editing forms that require user input such as logins, registration,  account editing forms etc.



### Fields

We have a list of fields below that we have already created but you can create any field you need and attach any attributes and properties you need. These do not need to be vuetify fields as it uses the `<component>` field in vue to create the needed field. 


#### Rule Items

When creating rules for validation the array accepts multiple formats and it just depends on how you want the overall form to look like.

````
->setRules([
    RuleItem::make()->setName('required')->setValue(TRUE),
    RuleItem::make('max', 100),
])

````


#### Select Items

Select items can also be easily created in multiple formats.

````
->setItems([
    SelectItem::make()->setId(1)->setValue('1 Star'),
    SelectItem::make(2, '2 Star'),
])

````

If you set your own text and value identifiers you can also do this
````
->setItemText('name')
->setItemValue('badge_id')
->setItems([
    [ 'name' => 'Bob Security 1' , 'badge_id' => 1 ],
    [ 'name' => 'Smith Security 2' , 'badge_id' => 2 ],
    [ 'name' => 'Jane Security 3' , 'badge_id' => 3 ],
])

````

---

#### Available fields

All fields have the following properties. These properties can be edited on the field instance by the getters and the setters. `$form->set{PropertyName}($new_value)` or `$form->get{PropertyName}()`

| Property           | Type    | Default    | Description                                                                                                            |
| :----------------- | :------ | :--------- | :--------------------------------------------------------------------------------------------------------------------- |
| **clearable**      | Boolean | FALSE      | Includes a cross icon that clears the field, positioned on the inside of the field (to the right).                     |
| **cols**           | Integer | 12         | How many columns this field should take up out of 12                                                                   |
| **component**      | String  | *Component | The component type to use when building the fields                                                                     |
| **component_type** | String  | *Component | If the component above includes a `type` attribute eg. input has number etc.                                           |
| **dense**          | Boolean | TRUE       | If the field should have a dense look                                                                                  |
| **help**           | String  | NULL       | Includes a question mark icon that clears the field, positioned on the inside of the field (to the right)              |
| **label**          | String  | Field Name | The Label to display on the field, if left blank it will displa ythe field name                                        |
| **masking**        | String  | NULL       | V-mask masking for the field                                                                                           |
| **name**           | String  | NULL       | The name of the field, this should be unique to this form                                                              |
| **order**          | Integer | 0          | The display order of the fields                                                                                        |
| **outlined**       | Boolean | TRUE       | If the field should have an outline display                                                                            |
| **placeholder**    | String  | NULL       | The field placeholder                                                                                                  |
| **readonly**       | Boolean | FALSE      | Determines if the field is readonly                                                                                    |
| **rules**          | Array   | []         | An array of validation rules                                                                                           |
| **type**           | String  | *Component | The type of field                                                                                                      |
| **value**          | Mixed   | NULL       | The initial value of the field. This can be filled here if always a fixed value or it can be set in the fill functions |

##### Autocomplete
[Vuetify Autocompletes](https://vuetifyjs.com/en/components/autocompletes/)

###### Properties

| Property       | Type    | Default | Description                                                                       |
| :------------- | :------ | :------ | :-------------------------------------------------------------------------------- |
| **any_field**  | Boolean | FALSE   | Include the option "any" in the select options.                                   |
| **chips**      | Boolean | FALSE   | Whether the selected options should be chip shaped                                |
| **items**      | Array   | NULL    | Array of SelectItems or items toi display as select options                       |
| **item_text**  | String  | Value   | Which property of the selectItem should be used to display in the select option   |
| **item_value** | String  | Id      | Which property of the selectItem should be used as the value in the select option |
| **multiple**   | Boolean | FALSE   | The user can select multiple items if set to true                                 |


###### Example

````
AutoCompleteField::make()
    ->setName('rating')
    ->setOrder(0)
    ->setLabel('Leave us a rating')
    ->setItems([
        SelectItem::make()->setId(1)->setValue('1 Star'),
        SelectItem::make()->setId(2)->setValue('2 Star'),
    ])
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);

````

---

##### Checkbox
[Vuetify Checkbox](https://vuetifyjs.com/en/components/checkboxes/)

###### Properties

No additional properties

###### Example

````
CheckboxField::make()
    ->setName('terms')
    ->setOrder(0)
    ->setLabel('Do you accept the current terms and conditions')
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

---

##### Date Picker
This is a custom date input that utilizes the vuetify date picker
[Vuetify Date Picker](https://vuetifyjs.com/en/components/date-pickers/)

###### Properties

| Property                   | Type    | Default | Description                        |
| :------------------------- | :------ | :------ | :--------------------------------- |
| **close_on_content_click** | Boolean | TRUE    | Close the date dialog on selection |
| **controls**               | Boolean | FALSE   | Show dialog controls               |
| **multiple**               | Boolean | FALSE   | Select a date range or single date |

###### Example

````
DatePickerField::make()
    ->setName('birth_date')
    ->setLabel('Whats ya Birthday?')
    ->setValue(\Carbon\Carbon::now()->toIso8601String())
    ->setOrder(0)
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

---

##### File Input
[Vuetify File Input](https://vuetifyjs.com/en/components/file-inputs/)

###### Properties

| Property         | Type    | Default       | Description                        |
| :--------------- | :------ | :------------ | :--------------------------------- |
| **accept**       | String  | *             | Close the date dialog on selection |
| **counter**      | Boolean | FALSE         | Show dialog controls               |
| **multiple**     | Boolean | FALSE         | Select a date range or single date |
| **prepend_icon** | String  | mdi-paperclip | Select a date range or single date |
| **show_size**    | Boolean | FALSE         | Select a date range or single date |

###### Example

````
FileInputField::make()
    ->setName('avatar')
    ->setOrder(0)
    ->setLabel('Upload your avatar image')
    ->setHelp('Upload your avatar!')
    ->setAccept('image/*')
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
        RuleItem::make()->setName('mimes')->setValue('image/jpeg,image/png'),
    ]);
````

---

##### Hidden
Just a hidden input field

###### Properties

No additional properties

###### Example

````
HiddenField::make()
    ->setName('token')
    ->setOrder(99)
    ->setValue(\Carbon\Carbon::now()->toIso8601String())
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

---

##### Number
Just a number input field

###### Properties

| Property | Type  | Default | Description                                   |
| :------- | :---- | :------ | :-------------------------------------------- |
| **max**  | Float | 99999   | Max number allowed                            |
| **min**  | Float | 0       | Minimum number allower                        |
| **step** | Float | 1       | Step for increasing and decreasing the number |

###### Example

````
HiddenField::make()
    ->setName('token')
    ->setOrder(99)
    ->setValue(\Carbon\Carbon::now()->toIso8601String())
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

---

### Creating a custom field example




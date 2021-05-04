
---

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
  - [Building your forms](#building-your-forms)
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
        - [Password](#password)
          - [Properties](#properties-6)
          - [Example](#example-6)
        - [RadioGroup](#radiogroup)
          - [Properties](#properties-7)
          - [Example](#example-7)
        - [Select](#select)
          - [Properties](#properties-8)
          - [Example](#example-8)
        - [Select](#select-1)
          - [Properties](#properties-9)
          - [Example](#example-9)
        - [Text](#text)
          - [Properties](#properties-10)
          - [Example](#example-10)
        - [Time Picker](#time-picker)
          - [Properties](#properties-11)
          - [Example](#example-11)
    - [Creating a custom field example](#creating-a-custom-field-example)


---

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


---

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


---

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


---

## Vue Components

---

### Globally 
```js
import LaravelVueEasyforms from 'laravel-vue-easyforms';
Vue.use( LaravelVueEasyforms );
```

You can then start using it in your components `<form-loader load_form"formname"></form-loader>`

---

## Forms

---

## Building your forms

To create your first form run the following artisan command:
`php artisan make:form {formName} {formType=input}`

example:
`php artisan make:form UserActionTableForm formType=action`

> ### **Action Forms:**
>Action Forms are used when you have a group of actions you want to display as buttons or icons or both.
>Action forms don't have fields, they have actions.


> ### **Input Forms:**
>Input Forms are used for creating and editing forms that require user input such as logins, registration, account editing forms etc.
>Input forms require fields and can have 3 buttons attached. Process, Reset and Cancel.

Both forms should have a process function that returns a `ProcessResponse`. This handles what happens when the form is processed.


### Fields

We have a list of fields below that we have already created but you can create any field you need and attach any attributes and properties you need. These do not need to be vuetify fields as it uses the `<component>` field in vue to create the needed field. 


#### Rule Items

<details>
<summary>More details</summary>


When creating rules for validation the array accepts multiple formats and it just depends on how you want the overall form to look like.

````php
->setRules([
    RuleItem::make()->setName('required')->setValue(TRUE),
    RuleItem::make('max', 100),
])

````
</details>

#### Select Items

<details>
<summary>More details</summary>
Select items can also be easily created in multiple formats.

````php
->setItems([
    SelectItem::make()->setId(1)->setValue('1 Star'),
    SelectItem::make(2, '2 Star'),
])

````

If you set your own text and value identifiers you can also do this
````php
->setItemText('name')
->setItemValue('badge_id')
->setItems([
    [ 'name' => 'Bob Security 1' , 'badge_id' => 1 ],
    [ 'name' => 'Smith Security 2' , 'badge_id' => 2 ],
    [ 'name' => 'Jane Security 3' , 'badge_id' => 3 ],
])

````

</details>

---

#### Available fields

<details>
<summary>More details</summary>

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

</details>

##### Autocomplete
[Vuetify Autocompletes](https://vuetifyjs.com/en/components/autocompletes/)

###### Properties
<details>
<summary>More details</summary>

| Property       | Type    | Default | Description                                                                       |
| :------------- | :------ | :------ | :-------------------------------------------------------------------------------- |
| **any_field**  | Boolean | FALSE   | Include the option "any" in the select options.                                   |
| **chips**      | Boolean | FALSE   | Whether the selected options should be chip shaped                                |
| **items**      | Array   | NULL    | Array of SelectItems or items to display as select options                        |
| **item_text**  | String  | Value   | Which property of the selectItem should be used to display in the select option   |
| **item_value** | String  | Id      | Which property of the selectItem should be used as the value in the select option |
| **multiple**   | Boolean | FALSE   | The user can select multiple items if set to true                                 |

</details>

###### Example

<details>
<summary>More details</summary>

````php
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
</details>

---

##### Checkbox
[Vuetify Checkbox](https://vuetifyjs.com/en/components/checkboxes/)

###### Properties

No additional properties

###### Example

<details>
<summary>More details</summary>

````php
CheckboxField::make()
    ->setName('terms')
    ->setOrder(0)
    ->setLabel('Do you accept the current terms and conditions')
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Date Picker
This is a custom date input that utilizes the vuetify date picker
[Vuetify Date Picker](https://vuetifyjs.com/en/components/date-pickers/)

###### Properties

<details>
<summary>More details</summary>

| Property                   | Type    | Default | Description                        |
| :------------------------- | :------ | :------ | :--------------------------------- |
| **close_on_content_click** | Boolean | TRUE    | Close the date dialog on selection |
| **controls**               | Boolean | FALSE   | Show dialog controls               |
| **multiple**               | Boolean | FALSE   | Select a date range or single date |

</details>

###### Example

<details>
<summary>More details</summary>

````php
DatePickerField::make()
    ->setName('birth_date')
    ->setLabel('Whats ya Birthday?')
    ->setValue(\Carbon\Carbon::now()->toIso8601String())
    ->setOrder(0)
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### File Input
[Vuetify File Input](https://vuetifyjs.com/en/components/file-inputs/)

###### Properties

<details>
<summary>More details</summary>

| Property         | Type    | Default       | Description                        |
| :--------------- | :------ | :------------ | :--------------------------------- |
| **accept**       | String  | *             | Close the date dialog on selection |
| **counter**      | Boolean | FALSE         | Show dialog controls               |
| **multiple**     | Boolean | FALSE         | Select a date range or single date |
| **prepend_icon** | String  | mdi-paperclip | Select a date range or single date |
| **show_size**    | Boolean | FALSE         | Select a date range or single date |

</details>

###### Example

<details>
<summary>More details</summary>

````php
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

</details>

---

##### Hidden

Just a hidden input field

###### Properties

No additional properties

###### Example

<details>
<summary>More details</summary>

````php
HiddenField::make()
    ->setName('token')
    ->setOrder(99)
    ->setValue(\Carbon\Carbon::now()->toIso8601String())
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Number
Just a number input field

###### Properties

<details>
<summary>More details</summary>

| Property | Type  | Default | Description                                   |
| :------- | :---- | :------ | :-------------------------------------------- |
| **max**  | Float | 99999   | Max number allowed                            |
| **min**  | Float | 0       | Minimum number allower                        |
| **step** | Float | 1       | Step for increasing and decreasing the number |

</details>

###### Example

<details>
<summary>More details</summary>

````php
HiddenField::make()
    ->setName('token')
    ->setOrder(99)
    ->setValue(\Carbon\Carbon::now()->toIso8601String())
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Password
Just a password input field

###### Properties

<details>
<summary>More details</summary>

| Property      | Type    | Default | Description            |
| :------------ | :------ | :------ | :--------------------- |
| **maxlength** | Float   | 99999   | Max length of value    |
| **counter**   | Boolean | FALSE   | Display length counter |

</details>

###### Example

<details>
<summary>More details</summary>

````php
PasswordField::make()
    ->setName('password')
    ->setOrder(1)
    ->setLabel('Password')
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### RadioGroup
[Vuetify Radio Buttons](https://vuetifyjs.com/en/components/radio-buttons/)

###### Properties

<details>
<summary>More details</summary>

| Property      | Type    | Default | Description                                               |
| :------------ | :------ | :------ | :-------------------------------------------------------- |
| **any_field** | Boolean | FALSE   | Include the option "any" in the select options.           |
| **chips**     | Boolean | FALSE   | Whether the selected options should be chip shaped        |
| **mandatory** | Boolean | FALSE   | Whether the radio group is mandatory                      |
| **items**     | Array   | NULL    | Array of RadioItems or items to display as select options |
| **row**       | Boolean | FALSE   | If layout should be rows                                  |
| **column**    | Boolean | TRUE    | If layout should be columns                               |

</details>

###### Example

<details>
<summary>More details</summary>

````php
RadioGroupField::make()
    ->setName('sky_colour')
    ->setOrder(0)
    ->setLabel('What\'s the colour of the sky?')
    ->setItems([
        RadioItem::make()
            ->setLabel('The sky is blue')
            ->setValue('blue')
            ->setColor('blue')
        ,
        RadioItem::make()
            ->setLabel('The sky is red')
            ->setValue('red')
            ->setColor('red')
        ,
        RadioItem::make()
            ->setLabel('The sky is pink')
            ->setValue('pink')
            ->setColor('pink')
        ,
    ])
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Select
[Vuetify Select](https://vuetifyjs.com/en/components/selects/)

###### Properties

<details>
<summary>More details</summary>

| Property       | Type    | Default | Description                                                                       |
| :------------- | :------ | :------ | :-------------------------------------------------------------------------------- |
| **any_field**  | Boolean | FALSE   | Include the option "any" in the select options.                                   |
| **chips**      | Boolean | FALSE   | Whether the selected options should be chip shaped                                |
| **items**      | Array   | NULL    | Array of SelectItems or items to display as select options                        |
| **item_text**  | String  | Value   | Which property of the selectItem should be used to display in the select option   |
| **item_value** | String  | Id      | Which property of the selectItem should be used as the value in the select option |
| **multiple**   | Boolean | FALSE   | The user can select multiple items if set to true                                 |

</details>

###### Example

<details>
<summary>More details</summary>

````php
SelectField::make()
    ->setName('officer_select')
    ->setOrder(8)
    ->setLabel('Select an Officer')
    ->setItemText('name')
    ->setItemValue('badge_id')
    ->setItems([
        [ 'name' => 'Bob Security 1' , 'badge_id' => 1 ],
        [ 'name' => 'Smith Security 2' , 'badge_id' => 2 ],
        [ 'name' => 'Jane Security 3' , 'badge_id' => 3 ],
    ])
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Select
[Vuetify Textareas](https://vuetifyjs.com/en/components/textareas/)

###### Properties

<details>
<summary>More details</summary>

| Property | Type    | Default | Description                            |
| :------- | :------ | :------ | :------------------------------------- |
| **rows** | Integer | 5       | How many rows the textarea should have |

</details>

###### Example

<details>
<summary>More details</summary>

````php
SelectField::make()
    ->setName('officer_select')
    ->setOrder(8)
    ->setLabel('Select an Officer')
    ->setItemText('name')
    ->setItemValue('badge_id')
    ->setItems([
        [ 'name' => 'Bob Security 1' , 'badge_id' => 1 ],
        [ 'name' => 'Smith Security 2' , 'badge_id' => 2 ],
        [ 'name' => 'Jane Security 3' , 'badge_id' => 3 ],
    ])
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Text
[Vuetify Text](https://vuetifyjs.com/en/components/text-fields/)

###### Properties

<details>
<summary>More details</summary>

| Property      | Type    | Default | Description            |
| :------------ | :------ | :------ | :--------------------- |
| **maxlength** | Float   | 99999   | Max length of value    |
| **counter**   | Boolean | FALSE   | Display length counter |

</details>

###### Example

<details>
<summary>More details</summary>

````php
TextField::make()
    ->setName('username')
    ->setOrder(0)
    ->setLabel('username')
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Time Picker
This is a custom time input that utilizes the vuetify time picker
[Vuetify Time Picker](https://vuetifyjs.com/en/components/time-pickers/)

###### Properties

<details>
<summary>More details</summary>

| Property        | Type    | Default | Description                        |
| :-------------- | :------ | :------ | :--------------------------------- |
| **ampmInTitle** | Boolean | TRUE    | Show AM and PM icons               |
| **noTitle**     | Boolean | FALSE   | Hide title on time picker          |
| **multiple**    | Boolean | FALSE   | Select a date range or single date |

</details>

###### Example

<details>
<summary>More details</summary>

````php
TimePickerField::make()
    ->setName('service_time')
    ->setLabel('Service Time')
    ->setValue([])
    ->setOrder(0)
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---


### Creating a custom field example




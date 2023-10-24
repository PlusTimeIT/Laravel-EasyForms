
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
    - [Alerts](#alerts)
    - [Axios](#axios)
  - [**Form Types**](#form-types)
    - [Fields](#fields)
      - [Available fields](#available-fields)
        - [Autocomplete](#autocomplete)
        - [Checkbox](#checkbox)
        - [Checkbox Group](#checkbox-group)
        - [Switch Field](#switch-field)
        - [Date Picker](#date-picker)
        - [File Input](#file-input)
        - [Hidden](#hidden)
        - [Number](#number)
        - [Password](#password)
        - [RadioGroup](#radiogroup)
        - [Select](#select)
        - [Textareas](#textareas)
        - [Text](#text)
        - [Time Picker](#time-picker)
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

All forms come with the following properties:

<details>
<summary>Form Properties</summary>

| Property   | Type   | Default        | Description                                                               |
| :--------- | :----- | :------------- | :------------------------------------------------------------------------ |
| **alerts** | Array  | Empty          | The alerts to display when certain events are triggered                   |
| **axios**  | Axios  | Default Axios  | Additional information for handling data on the front end                 |
| **name**   | String | FormName       | Name of the form, this should be the same as the file name and class name |
| **title**  | String | FormName Title | Title of the form - optional                                              |

</details>


### Alerts
[Vuetify Alerts](https://vuetifyjs.com/en/components/alerts/)

Alerts are triggered at specific events and are optional. They can be dismissable, removed after timeout, cleared on process and left as a sticky. The content accepts HTML and you can also link the response data from the axios call by adding `<response-data>` into the contents

Any [Vuetify Transitions](https://vuetifyjs.com/en/styles/transitions/#motion) can also be used.

<details>
<summary>Alert Properties</summary>

| Property             | Type    | Default         | Description                                     |
| :------------------- | :------ | :-------------- | :---------------------------------------------- |
| **auto_close_timer** | Integer | 0               | Timer in milliseconds                           |
| **border**           | String  | left            | Border location                                 |
| **color**            | String  | primary         | Primary colour of alert                         |
| **contents**         | String  | Empty           | Contents of the alert                           |
| **dark**             | Boolean | FALSE           | Give alert a dark theme                         |
| **dense**            | Boolean | FALSE           | Make the alert dense in appearance              |
| **dismissible**      | Boolean | FALSE           | Make the alert dismissable                      |
| **elevation**        | Integer | 0               | TODO: Better description - Add elevation?       |
| **icon**             | String  | Empty           | Icon mdi string for left side                   |
| **order**            | Integer | 0               | Order of the alert if there are multiple alerts |
| **origin**           | String  | center center   | Location of the alert on show                   |
| **outlined**         | Boolean | FALSE           | Invert the style of an alert                    |
| **prominent**        | Boolean | FALSE           | Make alert more pronounced                      |
| **text**             | Boolean | FALSE           | Display variant to reduce opacity of background |
| **transition**       | String  | fade-transition | Apply a transition                              |
| **trigger**          | Trigger | process_success | Alert triggers when a form has been reset       |
| **type**             | String  | Empty           | Alert triggers when a form has been reset       |
     

</details>

<details>
<summary>Event Triggers</summary>

| Event                  | Type  | Default | Description                                                                                      |
| :--------------------- | :---- | :------ | :----------------------------------------------------------------------------------------------- |
| **before_load**        | Alert | Empty   | Alert triggers before the form fields have loaded when supplied on page load. N/A on Axios Load. |
| **after_load**         | Alert | Empty   | Alert triggers after the form fields have loaded for an axios load or shown on page load.        |
| **failed_load**        | Alert | Empty   | Alert triggers if form has failed to load fields.                                                |
| **before_processing**  | Alert | Empty   | Alert triggers before the axios call is made for form processing                                 |
| **after_processing**   | Alert | Empty   | Alert triggers when axios call is completed, regardless of the outcome                           |
| **failed_processing**  | Alert | Empty   | Alert triggers on a failed axios call                                                            |
| **success_processing** | Alert | Empty   | Alert triggers on a successful axios call                                                        |
| **form_reset**         | Alert | Empty   | Alert triggers when a form has been reset                                                        |


</details>

<details>
<summary>Alert Example</summary>

````php
public function alerts(): array
{
    return [
        Alert::make()
            ->setTrigger(AlertTriggers::BeforeLoad)
            ->setColor('secondary')
            ->setBorder('top')
            ->setClosable(FALSE)
            ->setTextStyle(TRUE)
            ->setText('<p>This is a sticky alert</p> <p><a target="_blank" href="/easyforms/example/2">Check out Example 2 😁</a></p>')
            ->setIcon(
                Icon::make()->setIcon('mdi-note-multiple')
            )
        ,
        Alert::make()
            ->setTrigger(AlertTriggers::SuccessProcessing)
            ->setType(AlertTypes::Success)
            ->setColor('green')
            ->setProminent(TRUE)
            ->setBorder('top')
            ->setClosable(TRUE)
            ->setText('Concat the response: <response-data>')
    ];
}

````
</details>

### Axios

Axios objects are used to determine what to do with the data on the front end and how it interacts with Laravel.

In its simplest form the Axios object works using `Axios::make();`

<details>
<summary>Axios Properties</summary>

| Property              | Type    | Default | Description                                        |
| :-------------------- | :------ | :------ | :------------------------------------------------- |
| **expecting_results** | Boolean | TRUE    | Should the form emit the results of the axios call |
| **headers**           | Array   | Empty   | Additional headers to add into the axios calls     |
| **multi_part**        | Boolean | FALSE   | Is the form a multipart form                       |

</details>

<details>
<summary>Axios Example</summary>

````php
public function axios(): Axios
{
    return Axios::make()->setExpectingResults(FALSE)->setMultiPart(TRUE);
}

````
</details>

 ## **Form Types**

---

<details>

<summary>Action Forms</summary>
Action Forms are used when you have a group of actions you want to display as buttons or icons or both.

Action forms don't have fields, they have actions which are displayed as buttons or icons. 

Because you can pass them data they are useful for:
1. Single operations of lists - See Example 4
2. Bulk operations of lists - See Example 4
3. Any action that requires a button or icon where you need to process data on the backend.

</details>

<details>
<summary> Input Forms </summary>

Input Forms are used for creating and editing forms that require user input such as logins, registration, account editing forms etc.

Input forms require fields and can have 3 buttons attached. Process, Reset and Cancel.

Input forms are useful for:
1. Data input forms - basic CRUD functionality
2. Authenticating forms - taking input and utilising it in the backend in some way
3. 

</details>

Both forms should have a process function that returns a `ProcessResponse`. This handles what happens when the form is processed.

---

### Fields

We have a list of fields below that we have already created but you can create any field you need and attach any attributes and properties you need. These do not need to be vuetify fields as it uses the `<component>` field in vue to create the needed field. 

<details>
<summary>Rule Items</summary>


When creating rules for validation the array accepts multiple formats and it just depends on how you want the overall form to look like.

````php
->setRules([
    RuleItem::make()->setName('required')->setValue(TRUE),
    RuleItem::make('max', 100),
])

````
</details>

<details>
<summary>Select Items</summary>
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

<details>
<summary>Field Properties</summary>

All fields have the following properties. These properties can be edited on the field instance by the getters and the setters. `$form->set{PropertyName}($new_value)` or `$form->get{PropertyName}()`

| Property           | Type    | Default    | Description                                                                                                            |
| :----------------- | :------ | :--------- | :--------------------------------------------------------------------------------------------------------------------- |
| **clearable**      | Boolean | FALSE      | Includes a cross icon that clears the field, positioned on the inside of the field (to the right).                     |
| **cols**           | Integer | 12         | How many columns this field should take up out of 12                                                                   |
| **component**      | String  | *Component | The component type to use when building the fields                                                                     |
| **component_type** | String  | *Component | If the component above includes a `type` attribute eg. input has number etc.                                           |
| **dense**          | Boolean | TRUE       | If the field should have a dense look                                                                                  |
| **help**           | String  | NULL       | Includes a question mark icon that clears the field, positioned on the inside of the field (to the right)              |
| **label**          | String  | Field Name | The Label to display on the field, if left blank it will display the field name                                        |
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

---

#### Available fields

##### Autocomplete
[Vuetify Autocomplete](https://vuetifyjs.com/en/components/autocompletes/)

<details>
<summary>Autocomplete Properties</summary>

| Property       | Type    | Default | Description                                                                       |
| :------------- | :------ | :------ | :-------------------------------------------------------------------------------- |
| **any_field**  | Boolean | FALSE   | Include the option "any" in the select options.                                   |
| **chips**      | Boolean | FALSE   | Whether the selected options should be chip shaped                                |
| **items**      | Array   | NULL    | Array of SelectItems or items to display as select options                        |
| **item_text**  | String  | Value   | Which property of the selectItem should be used to display in the select option   |
| **item_value** | String  | Id      | Which property of the selectItem should be used as the value in the select option |
| **multiple**   | Boolean | FALSE   | The user can select multiple items if set to true                                 |

</details>

<details>
<summary>Autocomplete Example</summary>

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

<details>
<summary>Checkbox Properties</summary>
    No additional properties
</details>

<details>
<summary>Checkbox Example</summary>

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

##### Checkbox Group
[Vuetify Checkbox](https://vuetifyjs.com/en/components/checkboxes/)

<details>
<summary>Checkbox Group Properties</summary>
| Property   | Type        | Default | Description                           |
|-:----------|-:-----------|-:-------|-:-------------------------------------|
| **items**  | Array       | []      | Holds an array of CheckBoxItems       |
| **switch** | SwitchField | NULL    | Show a "Select / Deselect All" switch |
</details>

<details>
<summary>Checkbox Group Example</summary>

````php
CheckboxGroupField::make()
    ->setName('permissions')
    ->setOrder(1)
    ->setCols(12)
    ->setHelp('Select the Roles permissions')
    ->setLabel('Select Permissions')
    ->setItems([
        CheckboxItem::make()
            ->setId('can edit profile')
            ->setValue('Can Edit Profile')
            ->setCols(6)
            ->setColor('primary')
            ->setLabel('Can Edit Profile')
        ,
        CheckboxItem::make()
            ->setId('can edit customer profile')
            ->setValue('Can Edit Customer Profile')
            ->setCols(6)->setColor('primary')
            ->setLabel('Can Edit Customer Profile')
        ,
    ])
    ->setSwitch(
        SwitchField::make()->setDisplay(TRUE)
    )
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]),
````

</details>

---

##### Switch Field
[Vuetify Switches](https://vuetifyjs.com/en/components/switches/)

<details>
<summary>Switch Field Properties</summary>
| Property              | Type              | Default | Description                                                                                            |
|--:--------------------|--:----------------|--:------|--:-----------------------------------------------------------------------------------------------------|
| **append_icon**       | String            | NULL    | Appends an icon to the component, uses the same syntax as v-icon                                       |
| **background_color**  | String            | NULL    | Changes the background-color of the input                                                              |
| **color**             | String            | NULL    | Applies specified color to the control - it can be the name of material color                          |
| **dark**              | Boolean           | FALSE   | Applies the dark theme variant to the component.                                                       |
| **dense**             | Boolean           | FALSE   | Reduces the input height                                                                               |
| **disabled**          | Boolean           | FALSE   | Disable the input                                                                                      |
| **error**             | Boolean           | FALSE   | Puts the input in a manual error state                                                                 |
| **error-count**       | Integer or String | 1       | The total number of errors that should display at once                                                 |
| **error-messages**    | String or Array   | []      | Puts the input in an error state and passes through custom error messages.                             |
| **false-value**       | Any               | NULL    | Sets value for falsy state                                                                             |
| **flat**              | Boolean           | FALSE   | Display component without elevation. Default elevation for thumb is 4dp, flat resets it                |
| **hide_details**      | Boolean or String | NULL    | Hides hint and validation errors. When set to auto messages will be rendered only if there’s a message |
| **hide_spin_buttons** | Boolean           | FALSE   | Hides spin buttons on the input when type is set to number.                                            |
| **hint**              | String            | NULL    | Hint text                                                                                              |
| **id**                | String            | NULL    | Sets the DOM id on the component                                                                       |
| **input_value**       | Any               | NULL    | The v-model bound value                                                                                |
| **inset**             | Boolean           | FALSE   | Enlarge the v-switch track to encompass the thumb                                                      |
| **light**             | Boolean           | FALSE   | Applies the light theme variant to the component.                                                      |
| **loading**           | Boolean or String | FALSE   | Displays circular progress bar.                                                                        |
| **messages **         | String or Array   | []      | Displays a list of messages or message if using a string                                               |
| **multiple **         | Boolean           | FALSE   | Changes expected model to an array                                                                     |
| **persistent_hint **  | Boolean           | FALSE   | Forces hint to always be visible                                                                       |
| **prepend_icon **     | Any               | NULL    | Prepends an icon to the component uses the same syntax as v-icon                                       |
| **readonly **         | Boolean           | FALSE   | Puts input in readonly state                                                                           |
| **success **          | Boolean           | FALSE   | Puts the input in a manual success state                                                               |
| **success_messages ** | String or Array   | []      | Puts the input in a success state and passes through custom success messages.                          |
| **true_value **       | Any               | NULL    | Sets value for truthy state                                                                            |
| **validate_on_blur ** | Boolean           | FALSE   | Delays validation until blur event                                                                     |


</details>

<details>
<summary>Switch Field Example</summary>

````php
SwitchField::make()
    ->setDisplay(TRUE)
    ->setName('terms_and_conditions')
    ->setLabel('Do you accept the terms and conditions')
    ->setOrder(0)
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Date Picker
This is a custom date input that utilizes the [Vuetify Date Picker](https://vuetifyjs.com/en/components/date-pickers/)

<details>
<summary>Date Picker Properties</summary>

| Property                   | Type    | Default | Description                        |
| :------------------------- | :------ | :------ | :--------------------------------- |
| **close_on_content_click** | Boolean | TRUE    | Close the date dialog on selection |
| **controls**               | Boolean | FALSE   | Show dialog controls               |
| **multiple**               | Boolean | FALSE   | Select a date range or single date |

</details>

<details>
<summary>Date Picker Example</summary>

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

<details>
<summary>File Input Properties</summary>

| Property         | Type    | Default       | Description                        |
| :--------------- | :------ | :------------ | :--------------------------------- |
| **accept**       | String  | *             | Close the date dialog on selection |
| **counter**      | Boolean | FALSE         | Show dialog controls               |
| **multiple**     | Boolean | FALSE         | Select a date range or single date |
| **prepend_icon** | String  | mdi-paperclip | Select a date range or single date |
| **show_size**    | Boolean | FALSE         | Select a date range or single date |

</details>

<details>
<summary>File Input Example</summary>

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

<details>
<summary>Hidden Properties</summary>
No additional properties
</details>

<details>
<summary>Hidden Example</summary>

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

<details>
<summary>Number Properties</summary>

| Property | Type  | Default | Description                                   |
| :------- | :---- | :------ | :-------------------------------------------- |
| **max**  | Float | 99999   | Max number allowed                            |
| **min**  | Float | 0       | Minimum number allower                        |
| **step** | Float | 1       | Step for increasing and decreasing the number |

</details>

<details>
<summary>Number Example</summary>

````php
NumberField::make()
    ->setName('total_count')
    ->setOrder(0)
    ->setValue(\Carbon\Carbon::now()->toIso8601String())
    ->setRules([
        RuleItem::make()->setName('required')->setValue(TRUE),
    ]);
````

</details>

---

##### Password
Just a password input field

<details>
<summary>Password Properties</summary>

| Property      | Type    | Default | Description            |
| :------------ | :------ | :------ | :--------------------- |
| **maxlength** | Float   | 99999   | Max length of value    |
| **counter**   | Boolean | FALSE   | Display length counter |

</details>

<details>
<summary>Password Example</summary>

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

<details>
<summary>RadioGroup Properties</summary>

| Property      | Type    | Default | Description                                               |
| :------------ | :------ | :------ | :-------------------------------------------------------- |
| **any_field** | Boolean | FALSE   | Include the option "any" in the select options.           |
| **chips**     | Boolean | FALSE   | Whether the selected options should be chip shaped        |
| **mandatory** | Boolean | FALSE   | Whether the radio group is mandatory                      |
| **items**     | Array   | NULL    | Array of RadioItems or items to display as select options |
| **row**       | Boolean | FALSE   | If layout should be rows                                  |
| **column**    | Boolean | TRUE    | If layout should be columns                               |

</details>

<details>
<summary>RadioGroup Example</summary>

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

<details>
<summary>Select Properties</summary>

| Property       | Type    | Default | Description                                                                       |
| :------------- | :------ | :------ | :-------------------------------------------------------------------------------- |
| **any_field**  | Boolean | FALSE   | Include the option "any" in the select options.                                   |
| **chips**      | Boolean | FALSE   | Whether the selected options should be chip shaped                                |
| **items**      | Array   | NULL    | Array of SelectItems or items to display as select options                        |
| **item_text**  | String  | Value   | Which property of the selectItem should be used to display in the select option   |
| **item_value** | String  | Id      | Which property of the selectItem should be used as the value in the select option |
| **multiple**   | Boolean | FALSE   | The user can select multiple items if set to true                                 |

</details>

<details>
<summary>Select Example</summary>

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

##### Textareas
[Vuetify Textareas](https://vuetifyjs.com/en/components/textareas/)

<details>
<summary>Textareas Properties</summary>

| Property | Type    | Default | Description                            |
| :------- | :------ | :------ | :------------------------------------- |
| **rows** | Integer | 5       | How many rows the textarea should have |

</details>

<details>
<summary>Textareas Example</summary>

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

<details>
<summary>Text Properties</summary>

| Property      | Type    | Default | Description            |
| :------------ | :------ | :------ | :--------------------- |
| **maxlength** | Float   | 99999   | Max length of value    |
| **counter**   | Boolean | FALSE   | Display length counter |

</details>

<details>
<summary>Text Example</summary>

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
This is a custom time input that utilizes the [Vuetify Time Picker](https://vuetifyjs.com/en/components/time-pickers/)

<details>
<summary>Time Picker Properties</summary>

| Property        | Type    | Default | Description                        |
| :-------------- | :------ | :------ | :--------------------------------- |
| **ampmInTitle** | Boolean | TRUE    | Show AM and PM icons               |
| **noTitle**     | Boolean | FALSE   | Hide title on time picker          |
| **multiple**    | Boolean | FALSE   | Select a date range or single date |

</details>

<details>
<summary>Time Picker </summary>

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




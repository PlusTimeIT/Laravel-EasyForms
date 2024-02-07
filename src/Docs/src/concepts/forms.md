# Forms

To help separate concerns, forms come in multiple types.

The current form types are:

- [Input Form](#input-form)
- [Action Form](#action-form)
- Multistep Form (coming soon)

## Common Functions

All forms come with some common functions that are required to complete the forms basic operations.

### Load Function

::: tip
For the Axios controller can process the response, your function must return a [`LoadResponse`](./elements#load-response)
:::

The load function is included in the abstract class that both forms extend from, so it's not required to be added.
If a child function doesn't override the parent function, this will return a blank form when loaded
(no values in fields etc.).

::: details Example Successful Response

```php
return LoadResponse::make()->success()->form($form);
```

:::

::: details Example Failed Response

```php
return LoadResponse::make()->failed();
```

:::

### Process Function

::: tip
For the Axios controller can process the response, your function must return a [`ProcessResponse`](./elements#process-response)
:::

The process function allows you to process requests that pass validation. You don't need to check for validation
or conformity, you can just get straight to processing. Once the data reaches the process function the validation process
has already passed successfully.

With Action Forms the process function doesn't need to be updated, but you do need to create
functions for each callback you create for your actions.

::: details Example Successful Response

```php
return ProcessResponse::make()->success()->data('Success!');
```

:::

::: details Example Failed Response

```php
return ProcessResponse::make()->failed()->data('Failed!');
```

:::

## All Forms

All forms come with the following properties:

| Property               |       Type       |  Default  | Description                                                                             |
| :--------------------- | :--------------: | :-------: | :-------------------------------------------------------------------------------------- |
| `additional_data`      | AdditionalData[] | undefined | Array of [Additional Data](./elements#additional-data) passed when processing the form. |
| `additional_load_data` | AdditionalData[] | undefined | Array of [Additional Data](./elements#additional-data) passed when loading the form.    |
| `alerts`               |     Alert[]      | undefined | Array of [Alerts](./elements#alerts)                                                    |
| `axios`                |      Axios       | undefined | [Axios](./elements#axios)                                                               |
| `loader`               |    FormLoader    | undefined | [FormLoader](./elements#form-loader)                                                    |
| `name`                 |      String      | undefined | The name of the form, this should include any additional namespace parameters.          |
| `title`                |      String      | undefined | The title of the form displayed in a h2 tag, if left blank no title is shown.           |

## Input Form

Input Forms are used when you need to take users input, this could any typical CRUD actions or
something like logging in. The main difference is Input Forms contain
fields (textfield, selectfield, pickers etc.). They can also be validated (including frontend validation).

| Property             |  Type  |  Default  | Description                                                                                    |
| :------------------- | :----: | :-------: | :--------------------------------------------------------------------------------------------- |
| `button_align_row`   | String | undefined | Alignment of row for buttons.                                                                  |
| `button_justify_row` | String | undefined | Justify of row for buttons.                                                                    |
| `buttons`            | Button | undefined | Array of [Buttons](./elements#buttons) but must be one of [Button Types](./enums#button-types) |
| `fields`             | Field  | undefined | Array of [Fields](./fields)                                                                    |

## Action Form

Action forms are used when you want to display a group of icons or buttons that perform certain actions.
You typically see these in data tables where you have the option to delete, edit, change uer status etc.
They are also handy in dashboards when just needing a button to process something. The main difference
is Action Forms contain action icons and action buttons (not fields). These perform certain specified
actions provided in the form class.

| Property  |             Type             |  Default  | Description                                                                                 |
| :-------- | :--------------------------: | :-------: | :------------------------------------------------------------------------------------------ |
| `actions` | ActionIcon[], ActionButton[] | undefined | Array of [Action Buttons](./actions#action-button) or [Action Icons](./actions#action-icon) |
| `inline`  |           Boolean            | undefined | Apply inline styling to actions                                                             |
| `justify` |            String            |  center   | Justify of row holding actions                                                              |

## Adding Google V3 Recaptcha

Support has been added for google recaptcha V3. To add this to your form, you will need to setup an API key on google:

[Google Recaptcha Admin Console](https://www.google.com/recaptcha/admin/create)

Inside your `.env` file you will need to add both the `Site Key` and `Secret Key`.

```
GOOGLE_RECAPTCHA_SITE_KEY=
GOOGLE_RECAPTCHA_SECRET_KEY=
```

By default, inside the configuration the `mode` is set to `global`. This means that if a site key is provided in the `.env` file it will attempt to add recaptcha to all forms. If you want to exclude recaptcha from a particular form, you will need to set the google site key to `null` using the function `setGoogleRecaptchaSiteKey` (attached to all forms), inside your forms constructor like below:

```php
public function __construct()
{
    parent::__construct();

    return $this
        ->setGoogleRecaptchaSiteKey(null)
        ->setName('ExampleForm')
        ->setTitle('This is an example form.');
}
```

You can also set the `mode` to `explicit` and this means you will need to set the site key on each form you want the recaptcha to be applied on.

```php
public function __construct()
{
    parent::__construct();

    return $this
        ->setGoogleRecaptchaSiteKey(config('easyforms.form.google_recaptcha.site_key'))
        ->setName('ExampleForm')
        ->setTitle('This is an example form.');
}
```

### Managing the Minimum Score

The minimum score cannot currently be applied per form. This is done on a global scale and can be set withing the `easyforms` config file. It is currently set to `0.5` but can be updated for any value between 0.0 and 1.0

```php
'minimum_score' => 0.5,
```

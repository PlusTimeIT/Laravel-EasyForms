# Elements
There are multiple types of elements to help keep the data structure strict for the frontend.

## Icons

Icons are used in multiple components and elements and are the base for Action Icons.

::: tip Props
Get a full list of props from [Vuetify V-Icons](https://vuetifyjs.com/en/components/icons/)
:::

### Modified or Custom Props
| Property              |      Type       |      Default      | Description                                        |
|:----------------------|:---------------:|:-----------------:|:---------------------------------------------------|
| `class`               |     String      |     undefined     | Classes to add to Icon component                   |
| `tooltip`             |     Tooltip     |     undefined     | Add Tooltip to Icon                                |


## Alerts

Style and Display a V-Alert with an [Alert Trigger](./enums#alert-triggers) on a specific form action.

::: tip Props
Get a full list of props from [Vuetify V-Alerts](https://vuetifyjs.com/en/components/alerts/)
:::

### Modified or Custom Props
| Property              |      Type       |      Default      | Description                                        |
|:----------------------|:---------------:|:-----------------:|:---------------------------------------------------|
| `auto_close_timer`    |     Integer     |         0         | Auto close alert timer in milliseconds.            |
| `append_icon`         | Icon, undefined |     undefined     | Append icon to alert.                              |
| `cols`                | Integer, String |        12         | How many cols the alert should spread.             |
| `content_placeholder` |     String      | `<response-data>` | Placeholder to insert the response into alert body |
| `icon`                | Icon, undefined |     undefined     | This property is applied to `prepend_icon`         |
| `prepend_icon`        | Icon, undefined |     undefined     | Prepend icon to alert.                             |
| `text`                |     String      |     undefined     | This has been altered to allow basic HTML          |
| `trigger`             |  AlertTriggers  | SuccessProcessing | This has been altered to allow basic HTML          |

::: details Props Not Present

| Property              |
|:----------------------|
| `location`            |
| `model-value`         |
:::


## Buttons

Style and Display a V-Btn - Can be fully custom button or consist of a [Button Type](./enums#button-types)

::: tip Props
Get a full list of props from [Vuetify V-Buttons](https://vuetifyjs.com/en/components/buttons/)
:::

### Modified or Custom Props
| Property              |      Type       |      Default      | Description                                        |
|:----------------------|:---------------:|:-----------------:|:---------------------------------------------------|
| `class`               |     String      |     undefined     | Classes to add to Button component                 |
| `order`               |     Integer     |         0         | When multiple buttons are present, define an order |
| `tooltip`             |     Tooltip     |     undefined     | Add Tooltip to Icon                                |

::: details Props Not Present

| Property   |
|:-----------|
| `location` |
| `ripple`   |
:::


## Tooltips

Style and Display a V-Tooltip

::: tip Props
Get a full list of props from [Vuetify V-Tooltips](https://vuetifyjs.com/en/components/tooltips/)
:::

::: details Props Not Present

| Property            |
|:--------------------|
| `activator-props`   |
| `location-strategy` |
| `model-value`       |
| `origin`            |
:::

## Menu

Style and Display a V-Menu used for Picker Fields

::: tip Props
Get a full list of props from [Vuetify V-Menu](https://vuetifyjs.com/en/components/menus/)
:::

### Modified or Custom Props

| Property              |      Type       |      Default      | Description                                        |
|:----------------------|:---------------:|:-----------------:|:---------------------------------------------------|
| `class`               |     String      |     undefined     | Classes to add to Button component                 |
| `order`               |     Integer     |         0         | When multiple buttons are present, define an order |
| `tooltip`             |     Tooltip     |     undefined     | Add Tooltip to Icon                                |

::: details Props Not Present

| Property            |
|:--------------------|
| `activator-props`   |
| `location-strategy` |
| `model-value`       |
| `origin`            |
| `transition`        |
:::


## Progress Circular

Style and Display a V-Progress-Circular

::: tip Props
Get a full list of props from [Vuetify V-Progress-Circular](https://vuetifyjs.com/en/components/progress-circular/)
:::

### Modified or Custom Props
| Property              |      Type       |      Default      | Description                                   |
|:----------------------|:---------------:|:-----------------:|:----------------------------------------------|
| `class`               |     String      |     undefined     | Classes to add to Progress Circular component |

::: details Props Not Present

| Property            |
|:--------------------|
| `model-value`       |
:::


## Progress Linear

Style and Display a V-Progress-Linear

::: tip Props
Get a full list of props from [Vuetify V-Progress-Linear](https://vuetifyjs.com/en/components/progress-linear/)
:::

### Modified or Custom Props

| Property              |      Type       |      Default      | Description                                 |
|:----------------------|:---------------:|:-----------------:|:--------------------------------------------|
| `class`               |     String      |     undefined     | Classes to add to Progress Linear component |

::: details Props Not Present

| Property       |
|:---------------|
| `model-value`  |
| `buffer-value` |
| `clickable`    |
| `max`          |
:::


## Checkbox Item

Class used for handling checkboxes in CheckboxGroupFields.

### Custom Props

| Property |      Type      |  Default  | Description                                 |
|:---------|:--------------:|:---------:|:--------------------------------------------|
| `color`  |     String     | undefined | Color of checkbox                           |
| `cols`   | String,Integer |    12     | How many cols to spread the checkbox across |
| `id`     |     String     | undefined | ID of the checkbox                          |
| `label`  |     String     | undefined | Display label for the checkbox              |
| `value`  |     Mixed      | undefined | Value of the checkbox                       |


## Select Item

Class used for handling items in SelectFields and AutoCompleteFields.

### Custom Props

| Property |      Type      |  Default  | Description              |
|:---------|:--------------:|:---------:|:-------------------------|
| `id`     |     String     | undefined | ID of the select item    |
| `value`  |     Mixed      | undefined | Value of the select item |


## Rule Item

Class used for handling validation rules.

### Custom Props

| Property |      Type      |  Default  | Description                 |
|:---------|:--------------:|:---------:|:----------------------------|
| `name`   |     String     | undefined | Name of the validation rule |
| `value`  |     Mixed      | undefined | Value of the validation     |


## Radio Item

Class used for handling radio in RadioGroupFields.

### Custom Props

| Property |      Type      |  Default  | Description                 |
|:---------|:--------------:|:---------:|:----------------------------|
| `color`  |     String     | undefined | Color of radio              |
| `label`  |     String     | undefined | Display label for the radio |
| `value`  |     Mixed      | undefined | Value of the radio          |


## Condition Item

Class used for handling conditionals for displaying [Action Icons](./actions#action-icons) and [Action Buttons](./actions#action-button) on the frontend.

### Custom Props

| Property   |  Type  |  Default  | Description                                                                                     |
|:-----------|:------:|:---------:|:------------------------------------------------------------------------------------------------|
| `check`    | String | undefined | Search additional data provided to the form on load. Check attribute value against below value. |
| `against`  | String | undefined | Search additional data provided to the form on load. Check attribute value against above value. |
| `operator` | String | undefined | Operator for the check. `eg. "!=", "==", ">=" etc.`                                             |


## Form Loader

Class for handling how the form loader is styled and it's type.

### Custom Props

| Property   |               Type               |  Default  | Description                                                                    |
|:-----------|:--------------------------------:|:---------:|:-------------------------------------------------------------------------------|
| `type`     |         FormLoaderTypes          | undefined | Whether this is a Circular or Linear loader                                    |
| `progress` | ProgressLinear, ProgressCircular | undefined | [Progress Linear](#progress-linear) or [Progress Circular](#progress-circular) |


## Form Container

A custom element for displaying the form in.

### Custom Props

| Property |  Type   | Default | Description                                     |
|:---------|:-------:|:-------:|:------------------------------------------------|
| `cols`   | Integer |   12    | Cols to spread the form over (xs).              |
| `lg`     | Integer |   12    | Cols to spread the form over on a large screen  |
| `md`     | Integer |   12    | Cols to spread the form over on a medium screen |
| `sm`     | Integer |   12    | Cols to spread the form over on a small screen  |


## Load Response

A custom class for providing data conformity for loading forms in the Axios controller

### Custom Props

| Property   |         Type          |  Default  | Description                                                                                                |
|:-----------|:---------------------:|:---------:|:-----------------------------------------------------------------------------------------------------------|
| `form`     | InputForm, ActionForm | undefined | The loaded form object.                                                                                    |
| `redirect` |    Boolean,String     |   false   | Should the user be redirected when this response is returned. Set to "reload" to refresh the current page. |
| `result`   |        Boolean        | undefined | Determines if the load request was successful or failed.                                                   |


## Process Response

A custom class for providing data conformity when processing forms in the Axios controller

### Custom Props

| Property   |      Type      |  Default  | Description                                                                                                                   |
|:-----------|:--------------:|:---------:|:------------------------------------------------------------------------------------------------------------------------------|
| `data`     |     Mixed      | undefined | Data to pass back to the form, this can be displayed in alerts, or if form is expecting results - be passed in a Loader Event |
| `redirect` | Boolean,String |   false   | Should the user be redirected when this response is returned. Set to "reload" to refresh the current page.                    |
| `result`   |    Boolean     | undefined | Determines if the process request was successful or failed.                                                                   |


## Axios

Class for handling how axios should behave on the frontend.

### Custom Props

| Property            |  Type   | Default | Description                                                        |
|:--------------------|:-------:|:-------:|:-------------------------------------------------------------------|
| `expecting_results` | Boolean |  true   | Data will be pushed via LoaderEvents.Results when successful.      |
| `headers`           |  Array  |  Empty  | Additional headers to send with every axios request.               |
| `multi_part`        | Boolean |  false  | Required when dealing with files, forms must be set to multi-part. |


## Additional Data

Class for handling passing additional data to loading and processing forms.

### Custom Props

| Property |  Type  |  Default  | Description                                               |
|:---------|:------:|:---------:|:----------------------------------------------------------|
| `key`    | String | undefined | Key the value for easy reference when using conditionals. |
| `value`  | Mixed  | undefined | The value of the key                                      |
# Fields

There are multiple types of elements to help keep the data structure strict for the frontend.

## All Fields

Unfortunately due to large number of fields and attributes, the process of fine-tuning properties that are in all fields
is still in process so properties assign here may not actually do nothing on that particular field. If in doubt, always check [Vuetify's](https://vuetifyjs.com/) documentation.

All fields have the following properties available:

| Property                 |              Type              |      Default      | Description                                                                                                                                                      |
|:-------------------------|:------------------------------:|:-----------------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `active`                 |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `append_icon`            |        Icon, undefined         |     undefined     | See Vuetify                                                                                                                                                      |
| `autofocus`              |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `base_color`             |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `bg_color`               |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `center_affix`           |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `clear_icon`             |        Icon, undefined         |     undefined     | See Vuetify                                                                                                                                                      |
| `clearable`              |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `color`                  |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `cols`                   |        Integer, String         |        12         | See Vuetify                                                                                                                                                      |
| `component`              |             String             | Vuetify Component | Component to display as a string.                                                                                                                                |
| `density`                |          DensityTypes          |      Default      | See Vuetify                                                                                                                                                      |
| `depends_on`             |             String             |     undefined     | If set, this field will wait to load until the supplied field name is populated.                                                                                 |
| `disabled`               |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `discriminator`          |             String             |     Component     | Discriminator is used to determine the frontend class (using ClassRegistry)                                                                                      |
| `eager`                  |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `error`                  |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `error_messages`         |        String, String[]        |        []         | See Vuetify                                                                                                                                                      |
| `flat`                   |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `focused`                |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `help`                   |             String             |     undefined     | When set, will append an inner icon on the field with a tooltip. Used to explain the field.                                                                      |
| `hide_details`           |        Boolean, "auto"         |       false       | See Vuetify                                                                                                                                                      |
| `hint`                   |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `id`                     |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `label`                  |             String             |        ""         | See Vuetify                                                                                                                                                      |
| `loading`                |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `max_errors`             |        Integer, String         |         1         | See Vuetify                                                                                                                                                      |
| `messages`               |        String, String[]        |        []         | See Vuetify                                                                                                                                                      |
| `name`                   |             String             |        ""         | Name of the field, this is used to set the data key so it can be referenced.                                                                                     |
| `offset`                 |            Integer             |         0         | See Vuetify                                                                                                                                                      |
| `order`                  |            Integer             |         0         | When multiple fields are present, define an order                                                                                                                |
| `outlined`               |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `parent_loaded`          |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `persistent_clear`       |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `persistent_counter`     |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `persistent_hint`        |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `persistent_placeholder` |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `placeholder`            |             String             |        ""         | See Vuetify                                                                                                                                                      |
| `prefix`                 |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `prepend_icon`           |        Icon, undefined         |     undefined     | See Vuetify                                                                                                                                                      |
| `readonly`               |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `require_confirmation`   |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `required`               |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `role`                   |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `rounded`                |    Integer, String, Boolean    |       false       | See Vuetify                                                                                                                                                      |
| `rules`                  |           RuleItem[]           |        []         | Array of [Rule Items](./elements#rule-item) - must be valid [Laravel Validations](https://laravel.com/docs/10.x/validation#available-validation-rules)           |
| `show_if`                |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `show_if_parent`         |             String             |        ""         | If `show_if` is set to true, and all `show_if` fields are set, Parent should be the field name for the value below in `show_if_value`                            |
| `show_if_value`          |             Mixed              |        12         | If `show_if` is set to true, and all `show_if` fields are set, Value used for the above check on `show_if_parent`                                                |
| `single_line`            |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `suffix`                 |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `theme`                  |       String, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `tooltip`                |       Tooltip, undefined       |     undefined     | [Tooltip](./elements#tooltips)                                                                                                                                   |
| `type`                   |             String             |        ""         | If the field requires a `type` prop. (password, number etc.)                                                                                                     |
| `validate_on`            | Validation Triggers, undefined |     undefined     | See Vuetify                                                                                                                                                      |
| `validated`              |            Boolean             |       false       | See Vuetify                                                                                                                                                      |
| `value`                  |        Mixed, undefined        |     undefined     | See Vuetify                                                                                                                                                      |
| `variant`                |       Text Variant Types       |      Filled       | See Vuetify                                                                                                                                                      |

## AutoComplete Field

Style and Display a V-AutoComplete. Items are also Loadable.

::: tip Props
Get a full list of props from [Vuetify V-AutoComplete](https://vuetifyjs.com/en/components/autocompletes/)
:::

### Modified or Custom Props

| Property   |        Type        |  Default  | Description                                                         |
|:-----------|:------------------:|:---------:|:--------------------------------------------------------------------|
| `loadable` | Closure, undefined | undefined | Provide a closure that will be run when a field needs to be loaded. |

::: details Props Not Present

| Property              |
|:----------------------|
| `location`            |
:::


## Checkbox Field

Style and Display a V-Checkbox

::: tip Props
Get a full list of props from [Vuetify V-Checkboxes](https://vuetifyjs.com/en/components/checkboxes/)
:::


## Checkbox Group Field

Style and Display a group of V-Checkbox Fields.

### Modified or Custom Props

| Property |          Type          |  Default  | Description                                  |
|:---------|:----------------------:|:---------:|:---------------------------------------------|
| `class`  |        Boolean         | "ml-auto" | Custom classes to attach to checkbox group   |
| `items`  |    CheckboxField[]     |    []     | Array of [Checkbox Fields](#checkbox-field)  |
| `switch` | SwitchField, undefined | undefined | SwitchField for select all and deselect all. |
| `value`  |  CheckboxGroupValue[]  |    []     | Key - Value pair for each checkbox.          |


## Color Picker

Style and Display a V-Color-Picker. By Default this picker does not contain a Textfield. See [Color Picker Field](#color-picker-field)

::: tip Props
Get a full list of props from [Vuetify V-Color-Picker](https://vuetifyjs.com/en/components/color-pickers/)
:::


## Color Picker Field

Style and Display a V-Textfield with V-Color-Picker in a V-Menu.

### Modified or Custom Props

| Property    |    Type     |   Default   | Description                                                         |
|:------------|:-----------:|:-----------:|:--------------------------------------------------------------------|
| `menu`      |    Menu     |    Menu     | Style and display a [Menu](./elements#menu) for the picker.         |
| `picker`    | ColorPicker | ColorPicker | Style and display a [Color Picker](#color-picker)                   |
| `textfield` |  TextField  |  TextField  | Style and display a [Text Field](#text-field)                       |


## Date Picker

Style and Display a V-Date-Picker. By Default this picker does not contain a Textfield. See [Date Picker Field](#date-picker-field)

::: tip Props
Get a full list of props from [Vuetify V-Date-Picker](https://vuetifyjs.com/en/components/date-pickers/)
:::


## Date Picker Field

Style and Display a V-Textfield with V-Color-Picker in a V-Menu.

### Modified or Custom Props

| Property    |    Type    |  Default   | Description                                                 |
|:------------|:----------:|:----------:|:------------------------------------------------------------|
| `menu`      |    Menu    |    Menu    | Style and display a [Menu](./elements#menu) for the picker. |
| `picker`    | DatePicker | DatePicker | Style and display a [Date Picker](#date-picker)             |
| `textfield` | TextField  | TextField  | Style and display a [Text Field](#text-field)               |


## File Input Field

Style and Display a V-File-Input.

::: tip Props
Get a full list of props from [Vuetify V-File-Input](https://vuetifyjs.com/en/components/file-inputs/)
:::

::: details Props Not Present

| Property           |
|:-------------------|
| `counter-value`    |
| `model-modifiers`  |
| `model-value`      |
| `validation-value` |
:::

## Password Field

Style and Display a V-Textfield with additional password strength options.

::: tip Props
Get a full list of props from [Vuetify V-File-Input](https://vuetifyjs.com/en/components/file-inputs/)
:::

### Modified or Custom Props

| Property                 |       Type       |  Default  | Description                                              |
|:-------------------------|:----------------:|:---------:|:---------------------------------------------------------|
| `lower_case`             |     Boolean      |   true    | Password needs to include lowercase.                     |
| `min_length`             | Boolean, Integer |     8     | Password must be greater in length.                      |
| `numbers`                |     Boolean      |   true    | Password needs to include numbers.                       |
| `special`                |     Boolean      |   true    | Password needs to include special chars.                 |
| `upper_case`             |     Boolean      |   true    | Password needs to include uppercase.                     |
| `show_strength_bar`      |     Boolean      |   false   | Show password strength bar.                              |
| `strength_error_color`   |      String      |  "error"  | Color of bar when password is considered weak            |
| `strength_error_text`    |      String      |  "Weak"   | Text to display when password is considered weak         |
| `strength_success_color` |      String      | "success" | Color of bar when password is considered strong          |
| `strength_success_text`  |      String      | "Strong"  | Text to display when password is considered strong       |
| `strength_warning_color` |      String      | "warning" | Color of bar when password is considered medium          |
| `strength_warning_text`  |      String      | "Medium"  | Text to display when password is considered medium       |
| `textfield`              |    TextField     | TextField | Style and display a [Text Field](#text-field)            |
| `view_mode`              |     Boolean      |   false   | Should the password field include a "show password" mode |

## Radio Field

Style and Display a V-Radio

::: tip Props
Get a full list of props from [Vuetify V-Radio](https://vuetifyjs.com/en/components/radio-buttons/)
:::

## Radio Group Field

Style and Display a group of V-Radio-Group fields.

::: tip Props
Get a full list of props from [Vuetify V-Radio-Group](https://vuetifyjs.com/en/components/radio-buttons/)
:::

### Modified or Custom Props

| Property |     Type     | Default | Description                           |
|:---------|:------------:|:-------:|:--------------------------------------|
| `items`  | RadioField[] |   []    | Array of [Radio Fields](#radio-field) |


## Select Field

Style and Display a V-Select.

::: tip Props
Get a full list of props from [Vuetify V-Select](https://vuetifyjs.com/en/components/selects/)
:::

### Modified or Custom Props

| Property   |        Type        |  Default  | Description                                                         |
|:-----------|:------------------:|:---------:|:--------------------------------------------------------------------|
| `items`    |    SelectItem[]    |    []     | Array of [Select Items](./elements#select-item)                     |
| `loadable` | Closure, undefined | undefined | Provide a closure that will be run when a field needs to be loaded. |


::: details Props Not Present

| Property   |
|:-----------|
| `location` |
:::

## Switch Field

Style and Display a V-Switch.

::: tip Props
Get a full list of props from [Vuetify V-Switch](https://vuetifyjs.com/en/components/switches/)
:::

## Textarea Field

Style and Display a V-Textarea.

::: tip Props
Get a full list of props from [Vuetify V-Textarea](https://vuetifyjs.com/en/components/textareas/)
:::

## Text Field

Style and Display a V-Text-Field.

::: tip Props
Get a full list of props from [Vuetify V-Text-Field](https://vuetifyjs.com/en/components/text-fields/)
:::

### Modified or Custom Props

| Property   |        Type        |  Default  | Description                                                           |
|:-----------|:------------------:|:---------:|:----------------------------------------------------------------------|
| `masking`  | String, undefined  | undefined | Masking that adheres to [V-Maska](https://beholdr.github.io/maska/#/) |

::: details Props Not Present

| Property           |
|:-------------------|
| `counter-value`    |
| `model-modifiers`  |
| `model-value`      |
| `validation-value` |
:::


## Time Picker

::: error Note
Due to the time picker being in labs, we currently display a custom timer picker.
:::

Style and Display a V-Time-Picker. By Default this picker does not contain a Textfield. See [Time Picker Field](#date-picker-field)

::: tip Props
Get a full list of props from [Vuetify V-Time-Picker](https://vuetifyjs.com/en/components/time-pickers/)
:::

## Time Picker Field

Style and Display a V-Textfield with V-Time-Picker in a V-Menu.

### Modified or Custom Props

| Property    |    Type    |  Default   | Description                                                 |
|:------------|:----------:|:----------:|:------------------------------------------------------------|
| `menu`      |    Menu    |    Menu    | Style and display a [Menu](./elements#menu) for the picker. |
| `picker`    | TimePicker | TimePicker | Style and display a [Time Picker](#time-picker)             |
| `textfield` | TextField  | TextField  | Style and display a [Text Field](#text-field)               |

# Actions
Actions are only used for [Action Forms](/concepts/forms.html#action-form)

## All Actions

All actions have the following properties:

| Property     |      Type       |  Default  | Description                                                                     |
|:-------------|:---------------:|:---------:|:--------------------------------------------------------------------------------|
| `callback`   |     String      | undefined | Name of the callback function within form class.                                |
| `cols`       |     Integer     |    12     | How many cols the action should spread across.                                  |
| `conditions` | ConditionItem[] | undefined | Array of [Condition Items](/concepts/elements.html#condition-item)              |
| `identifier` |     String      | undefined | Unique identifier for this action.                                              |
| `name`       |     String      | undefined | Name of this action.                                                            |
| `order`      |     Integer     |     0     | Display order for this action.                                                  |


## Action Button
Action buttons are used when you need to process some actions but no user input is required.

| Property     |      Type       |  Default  | Description                                                                     |
|:-------------|:---------------:|:---------:|:--------------------------------------------------------------------------------|
| `button`     |     Button      | undefined | [Button](/concepts/elements.html#buttons) for styling that should be displayed. |

## Action Icon
Icons are used in multiple components and elements and are the base for Action Icons.

| Property | Type |  Default  | Description                                                                 |
|:---------|:----:|:---------:|:----------------------------------------------------------------------------|
| `icon`   | Icon | undefined | [Icon](/concepts/elements.html#icons) for styling that should be displayed. |

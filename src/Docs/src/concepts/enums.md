# Enums

For ease most options come in Enums to make selection simple and your IDE can type hint potential values. 
The package comes with a lot of Enums you can utilize but the main ones are below.

## Alert Triggers

| Enum              | Value              | Description                                                                          |
|:------------------|:-------------------|:-------------------------------------------------------------------------------------|
| BeforeLoad        | before_load        | Triggers before a form is loaded, can only be triggered when form is locally loaded. |
| AfterLoad         | after_load         | Triggers after a form is loaded.                                                     |
| FailedLoad        | failed_load        | Triggers if a form fails to loaded.                                                  |
| BeforeProcessing  | before_processing  | Triggers before the api call for processing is made.                                 |
| AfterProcessing   | after_processing   | Triggers after the api call for processing is made.                                  |
| FailedValidation  | failed_validation  | Triggers when validation fails.                                                      |
| FailedProcessing  | failed_processing  | Triggers if the api call for processing fails other than validation.                 |
| SuccessProcessing | success_processing | Triggers if the api call for processing is successful.                               |
| Cancelled         | cancelled          | Triggers when a form is cancelled.                                                   |
| FormReset         | form_reset         | Triggers when a form is reset.                                                       |

## Alert Types

| Enum    | Value   | Description                                     |
|:--------|:--------|:------------------------------------------------|
| Success | success | Provides generic vuetify success theme styling. |
| Info    | info    | Provides generic vuetify info theme styling.    |
| Warning | warning | Provides generic vuetify warning theme styling. |
| Error   | error   | Provides generic vuetify error theme styling.   |

## Button Types

| Enum    | Value   | Description                     |
|:--------|:--------|:--------------------------------|
| Process | process | Process button for Input Forms. |
| Reset   | reset   | Reset button for Input Forms.   |
| Cancel  | cancel  | Cancel button for Input Forms.  |

## Loader Events

| Enum       | Value      | Description                      |
|:-----------|:-----------|:---------------------------------|
| Loading    | loading    | Form is currently loading.       |
| Loaded     | loaded     | Form has successfully loaded.    |
| Results    | results    | Form has processing results.     |
| Reset      | reset      | Form has been reset.             |
| Cancelled  | cancelled  | Form has been cancelled.         |
| Processing | processing | Form is currently processing.    |
| Failed     | failed     | Form has failed to process.      |
| Successful | successful | Form has successfully processed. |
| Updated    | updated    | Form has field data updated.     |
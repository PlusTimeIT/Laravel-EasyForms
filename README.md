# General Readme

S2N-EasyForms is a laravel / vue package that makes setting up and magaing forms and actions in your laravel applciation simple. All data is edited in the backend and this generates your forms on the front end.

## Getting started
---
To ensure Second2None EasyForms runs without errors there is an initial setup phase that must be completed either through our automatic command or you can do this manually. 

Before either of those options is completed you first must:
- Open up `config/app.php` and add the code below to your `providers` array. 
`Second2None\EasyForms\Core\Providers\EasyForms::class` 
- You should also consider adding the below code to the `alias` array aswell.
`'EasyForms' => Second2None\EasyForms\Core\Providers\EasyForms::class,` 

### --- Automatic setup
This will automatically run through the setup process. This includes `vendor:publish`, migrations, seeders.
- Run the Second2None EasyForms initiate command
`php artisan SEF:initiate` 

### --- Manual setup
If you want to set it up manually or you are having issues with the automatic setup, the following needs to be done for Second2None EasyForms to run smoothly. 
1. Run the vendor publish command. This will ensure the config, migrations and seed files are copied.
`php artisan vendor:publish --provider=Second2None\EasyForms\Core\Providers\EasyForms`

2. The migrations are copied into your `database/migrations/` folder in your laravel project. Running the migrate command will pick these up.
`php artisan migrate` 

3. We have created a simple seed command to make seeding the migrations easier. 
`php artisan SEF:db-seeder`

4. The last step is setting the `initial_setup` in the database to be a value of 1 (true). This lets the package know everything is ready. 
We have made a simple command that allows you to edit any Second2None EasyForms settings, the command follows the following format. `php artisan SEF:update-setting {--name=} {--value=}` So to get the initial_setup variable changed to 1, we need to run.
`php artisan SEF:update-setting --name=initial_setup --value=1`
or
`php artisan SEF:update-setting --name initial_setup --value 1`

---
### General Readme

S2N-EasyForms is a laravel / vue package that makes setting up and magaing forms and actions in your laravel applciation simple. All data is edited in the backend and this generates your forms on the front end.

## Getting started
---
1. Open up config/app.php and add the below to your `providers` array. 
`Second2None\EasyForms\Core\Providers\EasyForms::class` 

You should also consider adding `'EasyForms' => Second2None\EasyForms\Core\Providers\EasyForms::class,` to the `alias` array aswell.

2. For ease you can go ahead and run 
`php artisan SEF:initiate` 
This will automatically run through the setup process. This includes `vendor:publish`, migrations, seeders.

3. If you want to set it up manually or you are having issues you need to run 
`php artisan vendor:publish --provider=Second2None\EasyForms\Core\Providers\EasyForms`

4. The migrations are copied to to your `database/migrations/` folder in your laravel project. So all you need to do is run the migrations 
`php artisan migrate` 

5. 

---
---


### Dev Readme

Making changes to the project

## Getting started
---
1. Learn to code && dev
2. Get IDE => install code
3. Make sick changes
4. Get changes approved
5. Push into dev version or if none in motion => create own version
<?php

use Illuminate\Support\Facades\Route;

$examples = \Config::get('easyforms.routes');
if ( ! $examples) {
    return;
}
if($examples['global']){
    if($examples['examples']){
        Route::prefix('easyforms')->group(function() {
            Route::prefix('example')->group(function() {
                Route::get('/', '\PlusTimeIT\EasyForms\Controllers\Pages@exampleHome')
                    ->name('example.home')->middleware(\Config::get('easyforms.middleware'));
                Route::get('/{example_id}', '\PlusTimeIT\EasyForms\Controllers\Pages@example')
                    ->name('example.template')->middleware(\Config::get('easyforms.middleware'));
                Route::get('/{example_id}/{data}', '\PlusTimeIT\EasyForms\Controllers\Pages@exampleWithData')
                    ->name('example.template-with-data')->middleware(\Config::get('easyforms.middleware'));
            });
        });
    }

    Route::prefix(\Config::get('easyforms.axios-prefix'))->group(function() {
        Route::prefix('forms')->group(function() {
            Route::post('/load', '\PlusTimeIT\EasyForms\Controllers\Axios@load')
                ->name('axios.forms.loader')->middleware(\Config::get('easyforms.middleware'));
            Route::post('/process', '\PlusTimeIT\EasyForms\Controllers\Axios@process')
                ->name('axios.forms.processor')->middleware(\Config::get('easyforms.middleware'));

            Route::prefix('fields')->group(function() {
                Route::post('/load', '\PlusTimeIT\EasyForms\Controllers\Axios@fieldLoad')
                    ->name('axios.forms.field.loader')->middleware(\Config::get('easyforms.middleware'));
            });
        });
    });
}
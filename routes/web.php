<?php

use Illuminate\Support\Facades\Route;

$display = \Config::get('easyforms.display');
if ($display) {
    Route::prefix(\Config::get('easyforms.prefix'))->group(function () {
        Route::prefix('forms')->group(function () {
            Route::post('/load', '\PlusTimeIT\EasyForms\Controllers\Axios@load')
                ->name('axios.forms.loader')->middleware(\Config::get('easyforms.middleware'));
            Route::post('/process', '\PlusTimeIT\EasyForms\Controllers\Axios@process')
                ->name('axios.forms.processor')->middleware(\Config::get('easyforms.middleware'));

            Route::prefix('fields')->group(function () {
                Route::post('/load', '\PlusTimeIT\EasyForms\Controllers\Axios@fieldLoad')
                    ->name('axios.forms.field.loader')->middleware(\Config::get('easyforms.middleware'));
            });
        });
    });
}

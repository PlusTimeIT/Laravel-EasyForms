<?php

use Illuminate\Support\Facades\Route;

$examples = \Config::get('easyforms.routes');
if ( ! $examples || ! $examples['global'] || ! $examples['examples']) {
    return;
}

Route::prefix('easyforms')->group(function() {
    Route::prefix('example')->group(function() {
        Route::get('/', '\PlusTimeIT\EasyForms\Controllers\Pages@exampleHome')
            ->name('example.home')->middleware('web');
        Route::get('/{example_id}', '\PlusTimeIT\EasyForms\Controllers\Pages@example')
            ->name('example.template')->middleware('web');
        Route::get('/{example_id}/{data}', '\PlusTimeIT\EasyForms\Controllers\Pages@exampleWithData')
            ->name('example.template-with-data')->middleware('web');
    });
});

Route::prefix('axios')->group(function() {
    Route::prefix('forms')->group(function() {
        Route::post('/load', '\PlusTimeIT\EasyForms\Controllers\Axios@load')
            ->name('axios.forms.loader')->middleware('web');
        Route::post('/process', '\PlusTimeIT\EasyForms\Controllers\Axios@process')
            ->name('axios.forms.processor')->middleware('web');

        Route::prefix('fields')->group(function() {
            Route::post('/load', '\PlusTimeIT\EasyForms\Controllers\Axios@fieldLoad')
                ->name('axios.forms.field.loader')->middleware('web');
        });
    });
});

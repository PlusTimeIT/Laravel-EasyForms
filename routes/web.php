<?php


use Illuminate\Support\Facades\Route;
use Second2None\EasyForms\App\Core\Controllers\Pages;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$examples = Config::get( 'easy_forms.routes' );
if( ! $examples || ! $examples['global'] ) 
    return;


if( $examples['examples'] )  {
    
    Route::middleware('web')->get( 
        'easyforms/example/{example_id}' , 
        '\Second2None\EasyForms\App\Core\Controllers\Pages@examples' 
    )->name( 'examples' );
    Route::middleware('web')->get( 
        'easyforms/example/' , 
        '\Second2None\EasyForms\App\Core\Controllers\Pages@example_home' 
    )->name( 'example-home' );
}


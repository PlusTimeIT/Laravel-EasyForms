<?php


use Illuminate\Support\Facades\Route;
use PlusTimeIT\EasyForms\App\Core\Controllers\Pages;
use PlusTimeIT\EasyForms\App\Core\Base;

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
        '\PlusTimeIT\EasyForms\App\Core\Controllers\Pages@examples' 
    )->name( 'examples' );
    
    Route::middleware('web')->get( 
        'easyforms/example/' , 
        '\PlusTimeIT\EasyForms\App\Core\Controllers\Pages@example_home' 
    )->name( 'example-home' );
    

}

Route::post( 
    '/axios/forms/load' , 
    '\PlusTimeIT\EasyForms\App\Core\Controllers\Axios@loadForm' 
)->name( 'form.loader' )->middleware('web');


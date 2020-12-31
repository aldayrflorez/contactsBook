<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*
GET: Recuperan datos
POST: Envia datos al server o BD
PUT: Reemplaza datos en el server o BD
*/

Route::post('contacts/create', 'ContactController@store')->name('contacts.store');
Route::get('contacts/', 'ContactController@index');
Route::get('contacts/edit/{contact_id}', 'ContactController@edit')->name('contacts.edit');
Route::put('contacts/update_contact/{contact_id}', 'ContactController@update_contact')->name('contacts.update');
Route::get('contacts/delete/{contact_id}', 'ContactController@delete')->name('contacts.delete');
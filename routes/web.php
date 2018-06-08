<?php

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

Route::get('/', 'EnrolmentsController@index')->name('index');
Route::get('/padres/{id}', 'EnrolmentsController@padres')->name('padres');
Route::get('/matricula/{id}', 'EnrolmentsController@matricula')->name('matricula');
Route::get('/curso/{id}/{curso}', 'EnrolmentsController@curso')->name('curso');
Route::post('/store', 'EnrolmentsController@store')->name('store');
Route::post('/storeAlumno', 'EnrolmentsController@storeAlumno')->name('store.alumno');
Route::post('/storePadres', 'EnrolmentsController@storePadres')->name('store.padres');
Route::post('/storeMatricula', 'EnrolmentsController@storeMatricula')->name('store.matricula');
Route::post('/storePrimeroEso', 'EnrolmentsController@storePrimeroESO')->name('store.primeroeso');
Route::post('/storeSegundoEso', 'EnrolmentsController@storeSegundoESO')->name('store.segundoeso');
Route::post('/storeTerceroEso', 'EnrolmentsController@storeTerceroESO')->name('store.terceroeso');
Route::post('/storePrimeroPMAR', 'EnrolmentsController@storePrimeroPMAR')->name('store.primeropmar');
Route::post('/storeSegundoPMAR', 'EnrolmentsController@storeSegundoPMAR')->name('store.segundopmar');
Route::post('/storeCuartoEso1', 'EnrolmentsController@storeCuartoEso1')->name('store.cuartoeso1');
Route::post('/storeCuartoEso2', 'EnrolmentsController@storeCuartoEso1')->name('store.cuartoeso2');
Route::post('/storeCuartoEso3', 'EnrolmentsController@storeCuartoEso3')->name('store.cuartoeso3');
Route::post('/PrimeroBachiller1', 'EnrolmentsController@storePrimeroBachiller1')->name('store.primerobachiller1');
Route::post('/PrimeroBachiller2', 'EnrolmentsController@storePrimeroBachiller2')->name('store.primerobachiller2');
Route::post('/PrimeroBachiller3', 'EnrolmentsController@storePrimeroBachiller3')->name('store.primerobachiller3');
Route::post('/SegundoBachiller1', 'EnrolmentsController@storeSegundoBachiller1')->name('store.Segundobachiller1');
Route::post('/SegundoBachiller2', 'EnrolmentsController@storeSegundoBachiller2')->name('store.Segundobachiller2');
Route::post('/SegundoBachiller3', 'EnrolmentsController@storeSegundoBachiller3')->name('store.Segundobachiller3');
Route::post('/storeCiclosFormativos', 'EnrolmentsController@storeCiclosFormativos')->name('store.ciclosformativos');

Route::get('/dpf/{id}', 'EnrolmentsController@pdf')->name('pdf');
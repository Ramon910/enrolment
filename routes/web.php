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
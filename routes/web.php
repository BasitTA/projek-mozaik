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

Route::get('/', function(){
    return redirect('/dare');
});
Route::get('/about','AboutController@index');
Route::get('/dare','DareController@index');
Route::get('/doa','DoaController@index');
Route::get('/dare/{dare}','DareController@show');
Route::get('/login','AdminController@login');

Route::middleware(['adminAuth'])->group(function (){
    Route::get('/admin', function(){
        return redirect('/admin/dare');
    });
    Route::get('/admin/dare','AdminController@indexDare');
    Route::get('/admin/doa','AdminController@indexDoa');
    Route::get('/admin/newDare','AdminController@createDare');
    Route::get('/admin/newDoa','AdminController@createDoa');
});
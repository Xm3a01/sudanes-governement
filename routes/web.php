<?php

use App\Ministry;
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


Route::get('/','BlagController@index');

Route::get('counts', function () {
    return view('count');
});
Route::post('/blags', 'BlagController@store')->name('blags.store');
Auth::routes();
Route::group(['prefix' => 'dashboard' , 'middleware'=>'auth'],function(){
    Route::get('/', 'Dashboard\DashboardController@index')->name('home');
    Route::resource('ministaries','Dashboard\MinistaryController');
    Route::get('/datas', 'BlagController@data');
    Route::get('delete/{id}' , 'BlagController@delete')->name('delete.noty');
    Route::resource('blags', 'BlagController',['except'=>['index','store']]);
    Route::get('delete/{id}' , 'BlagController@delete')->name('delete.noty');
    Route::get('/delets{id}', 'ShowController@delete')->name('deletes');
    Route::get('/downloads/{id}', 'ShowController@download')->name('downloads');

});



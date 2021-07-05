<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(); 

    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
    
    Route::middleware('auth')->group(function()
    {
        Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

        Route::get('/home', 'App\Http\Controllers\AdminsController@index')->name('admin.index');

    Route::get('/admin', 'App\Http\Controllers\AdminsController@index')->name('admin.index');

    Route::get('/admin/addusers', 'App\Http\Controllers\AdduserController@index')->name('adduser.index');
    Route::get('/admin/addusers/create', 'App\Http\Controllers\AdduserController@create')->name('adduser.create');
    Route::post('/admin/addusers', 'App\Http\Controllers\AdduserController@store')->name('adduser.store');
    Route::delete('/admin/addusers/{adduser}/destroy', 'App\Http\Controllers\AdduserController@destroy')->name('adduser.destroy');
    Route::patch('/admin/addusers/{adduser}/update', 'App\Http\Controllers\AdduserController@update')->name('adduser.update');
    Route::get('/admin/addusers/{adduser}/edit', 'App\Http\Controllers\AdduserController@edit')->name('adduser.edit');
    Route::get('/admin/addusers/{adduser}/show', 'App\Http\Controllers\AdduserController@show')->name('adduser.show');

    
    Route::get('/admin/addcities', 'App\Http\Controllers\AddcitieController@index')->name('addcitie.index');
    Route::get('/admin/addcities/create', 'App\Http\Controllers\AddcitieController@create')->name('addcitie.create');
    Route::post('/admin/addcities', 'App\Http\Controllers\AddcitieController@store')->name('addcitie.store');
    Route::delete('/admin/addcities/{addcitie}/destroy', 'App\Http\Controllers\AddcitieController@destroy')->name('addcitie.destroy');
    Route::patch('/admin/addcities/{addcitie}/update', 'App\Http\Controllers\AddcitieController@update')->name('addcitie.update');
    Route::get('/admin/addcities/{addcitie}/edit', 'App\Http\Controllers\AddcitieController@edit')->name('addcitie.edit');
    Route::get('/admin/addcities/{addcitie}/show', 'App\Http\Controllers\AddcitieController@show')->name('addcitie.show');



    Route::get('/admin/addcuisines', 'App\Http\Controllers\AddcuisineController@index')->name('addcuisine.index');
    Route::get('/admin/addcuisines/create', 'App\Http\Controllers\AddcuisineController@create')->name('addcuisine.create');
    Route::post('/admin/addcuisines', 'App\Http\Controllers\AddcuisineController@store')->name('addcuisine.store');
    Route::delete('/admin/addcuisines/{addcuisine}/destroy', 'App\Http\Controllers\AddcuisineController@destroy')->name('addcuisine.destroy');
    Route::patch('/admin/addcuisines/{addcuisine}/update', 'App\Http\Controllers\AddcuisineController@update')->name('addcuisine.update');
    Route::get('/admin/addcuisines/{addcuisine}/edit', 'App\Http\Controllers\AddcuisineController@edit')->name('addcuisine.edit');
    Route::get('/admin/addcuisines/{addcuisine}/show', 'App\Http\Controllers\AddcuisineController@show')->name('addcuisine.show');



    Route::get('/admin/addzones', 'App\Http\Controllers\AddzoneController@index')->name('addzone.index');
    Route::get('/admin/addzones/create', 'App\Http\Controllers\AddzoneController@create')->name('addzone.create');
    Route::post('/admin/addzones', 'App\Http\Controllers\AddzoneController@store')->name('addzone.store');
    Route::delete('/admin/addzones/{addzone}/destroy', 'App\Http\Controllers\AddzoneController@destroy')->name('addzone.destroy');
    Route::patch('/admin/addzones/{addzone}/update', 'App\Http\Controllers\AddzoneController@update')->name('addzone.update');
    Route::get('/admin/addzones/{addzone}/edit', 'App\Http\Controllers\AddzoneController@edit')->name('addzone.edit');
    Route::get('/admin/addzones/{addzone}/show', 'App\Http\Controllers\AddzoneController@show')->name('addzone.show');
    Route::delete('/admin/addzones/{addzone}/destroy', 'App\Http\Controllers\AddzoneController@destroy')->name('addzone.destroy');



    Route::get('/admin/addrestaurents', 'App\Http\Controllers\AddrestaurentController@index')->name('addrestaurent.index');
    Route::get('/admin/addrestaurents/create', 'App\Http\Controllers\AddrestaurentController@create')->name('addrestaurent.create');
    Route::post('/admin/addrestaurents', 'App\Http\Controllers\AddrestaurentController@store')->name('addrestaurent.store');
    Route::patch('/admin/addrestaurents/{addrestaurent}/update', 'App\Http\Controllers\AddrestaurentController@update')->name('addrestaurent.update');
    Route::get('/admin/addrestaurents/{addrestaurent}/edit', 'App\Http\Controllers\AddrestaurentController@edit')->name('addrestaurent.edit');
    Route::get('/admin/addrestaurents/{addrestaurent}/show', 'App\Http\Controllers\AddrestaurentController@show')->name('addrestaurent.show');

}); 






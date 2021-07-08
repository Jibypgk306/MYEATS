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

    
    

    Route::get('/admin/cuisines', 'App\Http\Controllers\CuisineController@index')->name('cuisine.index');
    Route::get('/admin/cuisines/create', 'App\Http\Controllers\CuisineController@create')->name('cuisine.create');
    Route::post('/admin/cuisines', 'App\Http\Controllers\CuisineController@store')->name('cuisine.store');
    Route::delete('/admin/cuisines/{cuisine}/destroy', 'App\Http\Controllers\CuisineController@destroy')->name('cuisine.destroy');
    Route::patch('/admin/cuisines/{cuisine}/update', 'App\Http\Controllers\CuisineController@update')->name('cuisine.update');
    Route::get('/admin/cuisines/{cuisine}/edit', 'App\Http\Controllers\CuisineController@edit')->name('cuisine.edit');
    Route::get('/admin/cuisines/{cuisine}/show', 'App\Http\Controllers\CuisineController@show')->name('cuisine.show');


    Route::get('/admin/addcities', 'App\Http\Controllers\CityController@index')->name('addcitie.index');
    Route::get('/admin/addcities/create', 'App\Http\Controllers\CityController@create')->name('addcitie.create');
    Route::post('/admin/addcities', 'App\Http\Controllers\CityController@store')->name('addcitie.store');
    Route::delete('/admin/addcities/{citie}/destroy', 'App\Http\Controllers\CityController@destroy')->name('addcitie.destroy');
    Route::patch('/admin/addcities/{citie}/update', 'App\Http\Controllers\CityController@update')->name('addcitie.update');
    Route::get('/admin/addcities/{citie}/edit', 'App\Http\Controllers\CityController@edit')->name('addcitie.edit');
    Route::get('/admin/addcities/{citie}/show', 'App\Http\Controllers\CityController@show')->name('addcitie.show');





    

    Route::get('/admin/addzones', 'App\Http\Controllers\AddzoneController@index')->name('addzone.index');
    Route::get('/admin/addzones/create', 'App\Http\Controllers\AddzoneController@create')->name('addzone.create');
    Route::post('/admin/addzones', 'App\Http\Controllers\AddzoneController@store')->name('addzone.store');
    Route::delete('/admin/addzones/{addzone}/destroy', 'App\Http\Controllers\AddzoneController@destroy')->name('addzone.destroy');
    Route::patch('/admin/addzones/{addzone}/update', 'App\Http\Controllers\AddzoneController@update')->name('addzone.update');
    Route::get('/admin/addzones/{addzone}/edit', 'App\Http\Controllers\AddzoneController@edit')->name('addzone.edit');
    Route::get('/admin/addzones/{addzone}/show', 'App\Http\Controllers\AddzoneController@show')->name('addzone.show');
    Route::delete('/admin/addzones/{addzone}/destroy', 'App\Http\Controllers\AddzoneController@destroy')->name('addzone.destroy');



    Route::get('/admin/restaurents', 'App\Http\Controllers\RestaurentController@index')->name('restaurent.index');
    Route::get('/admin/restaurents/create', 'App\Http\Controllers\RestaurentController@create')->name('restaurent.create');
    Route::post('/admin/restaurents', 'App\Http\Controllers\RestaurentController@store')->name('restaurent.store');
    Route::patch('/admin/restaurents/{restaurent}/update', 'App\Http\Controllers\RestaurentController@update')->name('restaurent.update');
    Route::get('/admin/restaurents/{restaurent}/edit', 'App\Http\Controllers\RestaurentController@edit')->name('restaurent.edit');
    Route::get('/admin/restaurents/{restaurent}/show', 'App\Http\Controllers\RestaurentController@show')->name('restaurent.show');

}); 






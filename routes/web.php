<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Models\Adduser;

Auth::routes(); 

    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
    

    Route::middleware('auth')->group(function(){
    Route::get('/admin', 'App\Http\Controllers\AdminsController@index')->name('admin.index');

    Route::get('/admin/addusers', 'App\Http\Controllers\AdduserController@index')->name('adduser.index');
    Route::get('/admin/addusers/create', 'App\Http\Controllers\AdduserController@create')->name('adduser.create');
    Route::post('/admin/addusers', 'App\Http\Controllers\AdduserController@store')->name('adduser.store');

    Route::delete('/admin/addusers/{adduser}/destroy', 'App\Http\Controllers\AdduserController@destroy')->name('adduser.destroy');
    Route::patch('/admin/addusers/{adduser}/update', 'App\Http\Controllers\AdduserController@update')->name('adduser.update');

    Route::get('/admin/addusers/{adduser}/edit', 'App\Http\Controllers\AdduserController@edit')->name('adduser.edit');

    Route::get('/admin/addusers/{adduser}/show', 'App\Http\Controllers\AdduserController@show')->name('adduser.show');

    

}); 






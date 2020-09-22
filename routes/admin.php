<?php


Route::group(['namespace'=>'Admin','middleware' => 'auth:admin'], function() {
    Route::get('/', 'DashboardController@index') -> name('admin.dashboard');
});




Route::group(['namespace'=>'Admin' ,'middleware'=>'guest:admin'],function () {

    Route::get('login', 'LoginController@getlogin');

    Route::post('login', 'LoginController@login') -> name('admin.login');

});







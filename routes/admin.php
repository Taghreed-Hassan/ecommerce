<?php


Route::group(['namespace'=>'Admin','middleware' => 'auth:admin'], function() {
    Route::get('/', 'DashboardController@index') -> name('admin.dashboard');
});



// any one can login
Route::group(['namespace'=>'Admin' ,'middleware'=>'guest:admin'],function () {

    Route::get('login', 'LoginController@getlogin') -> name('get.admin.login');

    Route::post('login', 'LoginController@login') -> name('admin.login');

});







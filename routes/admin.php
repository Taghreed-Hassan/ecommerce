<?php

define('PAGINATION_COUNT',10);

Route::group(['namespace'=>'Admin','middleware' => 'auth:admin'], function() {
    Route::get('/', 'DashboardController@index') -> name('admin.dashboard');


      ######################### Begin Languages Route ########################
    Route::group(['prefix' => 'languages'], function () {
       Route::get('/','LanguagesController@index') -> name('admin.languages');

        Route::get('create','LanguagesController@create') -> name('admin.languages.create');
        Route::post('store','LanguagesController@store') -> name('admin.languages.store');

        Route::get('edit/{id}','LanguagesController@edit') -> name('admin.languages.edit');

        Route::post('update/{id}','LanguagesController@update') -> name('admin.languages.update');

        Route::get('delete/{id}','LanguagesController@destroy') -> name('admin.languages.delete');

     Route::get('changeStatus/{id}','Main_CategoriesController@changeStatus') -> name('admin.maincategories.status');


       ######################### end Languages Route ########################
    });






######################### Begin Main Categories Route ########################
Route::group(['prefix' => 'main_categories'], function () {
    Route::get('/','MainCategoriesController@index') -> name('admin.main_categories');

    Route::get('create','MainCategoriesController@create') -> name('admin.main_categories.create');
    Route::post('store','MainCategoriesController@store') -> name('admin.main_categories.store');

    Route::get('edit/{id}','MainCategoriesController@edit') -> name('admin.main_categories.edit');

    Route::post('update/{id}','MainCategoriesController@update') -> name('admin.main_categories.update');

    Route::get('delete/{id}','MainCategoriesController@destroy') -> name('admin.main_categories.delete');

    ######################### end Main Categories  Route ########################
});



});

// any one can login
Route::group(['namespace'=>'Admin' ,'middleware'=>'guest:admin'],function () {

    Route::get('login', 'LoginController@getlogin') -> name('get.admin.login');

    Route::post('login', 'LoginController@login') -> name('admin.login');

});







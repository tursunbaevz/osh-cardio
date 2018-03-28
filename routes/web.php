<?php


Route::get('/', 'MainController@index');

Route::get('/layout', 'MainController@layout');


Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {
    Route::get('/adminpanel/dashboard', 'Adminpanel\Dashboard@index');
    Route::get('/adminpanel/dashboard/posts', 'Adminpanel\Posts@index');
    // future adminpanel routes also should belong to the group
});


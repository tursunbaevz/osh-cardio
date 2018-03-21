<?php


Route::get('/', 'MainController@index');


Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {
    Route::get('/adminpanel/dashboard', 'Adminpanel\Dashboard@index');
    // future adminpanel routes also should belong to the group
});
<?php


Route::get('/', 'MainController@index');

Route::get('/layout', 'MainController@layout');


Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {
    Route::get('/adminpanel/dashboard', 'Adminpanel\Dashboard@index');
    Route::get('/adminpanel/dashboard/posts', 'Adminpanel\Posts@index');
    Route::get('/adminpanel/dashboard/posts/create', 'Adminpanel\Posts@create');
    Route::post('/adminpanel/dashboard/posts', 'Adminpanel\Posts@store');
    Route::delete('/adminpanel/dashboard/posts/{post}', 'Adminpanel\Posts@destroy');
    // future adminpanel routes also should belong to the group
});


<?php

Route::get('/', 'MainController@index');
Route::get('/posts', 'MainController@postsList');
Route::get('/posts/{id}', 'MainController@eachPost');

Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {
    Route::get('/adminpanel/dashboard', 'Adminpanel\Dashboard@index');
    Route::get('/adminpanel/dashboard/posts', 'Adminpanel\Posts@index');
    Route::get('/adminpanel/dashboard/posts/create', 'Adminpanel\Posts@create');

    Route::post('/adminpanel/dashboard/posts', 'Adminpanel\Posts@store');
    // future adminpanel routes also should belong to the group
});


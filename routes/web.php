<?php



Route::get('/test', 'MainController@test');


Route::get('/', 'MainController@index');
Route::get('/posts', 'MainController@postsList');
Route::get('/posts/{id}', 'MainController@show');
Route::get('/postgrid', 'MainController@postgrid');
Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {
    Route::get('/adminpanel/dashboard/posts', 'Adminpanel\Posts@index');
    Route::get('/adminpanel/dashboard/posts/create', 'Adminpanel\Posts@create');
    Route::post('/adminpanel/dashboard/posts', 'Adminpanel\Posts@store');
    Route::post('/adminpanel/dashboard/posts/update/{post}', 'Adminpanel\Posts@update');
    Route::get('/adminpanel/dashboard/posts/edit/{post}', 'Adminpanel\Posts@edit');
    Route::delete('/adminpanel/dashboard/posts/', 'Adminpanel\Posts@destroy')->name('post.delete');
    Route::post('/adminpanel/dashboard/posts/upload', 'Adminpanel\Posts@upload');

    // future adminpanel routes also should belong to the group
});


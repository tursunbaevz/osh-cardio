<?php



Route::get('/test', 'MainController@test');


Route::get('/', 'MainController@index');
Route::get('/posts', 'MainController@postsList');
Route::get('/posts/{id}', 'MainController@show');
Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {
	// POSTS
    Route::get('/adminpanel/dashboard/posts', 'Adminpanel\Posts@index');
    Route::get('/adminpanel/dashboard/posts/create', 'Adminpanel\Posts@create');
    Route::post('/adminpanel/dashboard/posts', 'Adminpanel\Posts@store');
    Route::post('/adminpanel/dashboard/posts/update/{post}', 'Adminpanel\Posts@update');
    Route::get('/adminpanel/dashboard/posts/edit/{post}', 'Adminpanel\Posts@edit');
    Route::delete('/adminpanel/dashboard/posts/', 'Adminpanel\Posts@destroy')->name('post.delete');
    Route::post('/adminpanel/dashboard/posts/upload', 'Adminpanel\Posts@upload');

    // ALBUMS
    Route::get('/adminpanel/dashboard/albums', 'Adminpanel\AlbumsController@index');
    Route::get('/adminpanel/dashboard/albums/create', 'Adminpanel\AlbumsController@create');
    Route::post('/adminpanel/dashboard/albums/store', 'Adminpanel\AlbumsController@store');
    Route::get('/adminpanel/dashboard/albums/{id}', 'Adminpanel\AlbumsController@show');



    //PHOTOS
    Route::get('/adminpanel/dashboard/photos/create/{id}', 'Adminpanel\PhotosController@create');
    Route::post('/adminpanel/dashboard/photos/store', 'Adminpanel\PhotosController@store');
    Route::delete('/adminpanel/dashboard/albums/photo', 'Adminpanel\PhotosController@destroy');    
    
});


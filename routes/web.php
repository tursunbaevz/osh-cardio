<?php



Route::get('/test', 'MainController@test');


Route::get('/', 'MainController@index');
Route::get('/posts', 'MainController@postsList');
Route::get('/posts/{id}', 'MainController@show');
Route::get('/services', 'MainController@servicesList');
Route::get('/services/{id}', 'MainController@servicesShow');
Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {

								/*=====POSTS=====*/

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
    Route::delete('/adminpanel/dashboard/albums/', 'Adminpanel\AlbumsController@destroy');   




    //PHOTOS
    Route::get('/adminpanel/dashboard/photos/create/{id}', 'Adminpanel\PhotosController@create');
    Route::post('/adminpanel/dashboard/photos/store', 'Adminpanel\PhotosController@store');
    Route::delete('/adminpanel/dashboard/albums/photo', 'Adminpanel\PhotosController@destroy');   

     
    
    							/*====SERVICES====*/
    Route::get('/adminpanel/dashboard/services','Adminpanel\ServicesController@index');
    Route::get('/adminpanel/dashboard/services/create','Adminpanel\ServicesController@create');
    Route::post('/adminpanel/dashboard/services','Adminpanel\ServicesController@store');
    Route::delete('/adminpanel/dashboard/services/', 'Adminpanel\ServicesController@destroy')->name('service.delete');
    Route::get('/adminpanel/dashboard/services/edit/{service}','Adminpanel\ServicesController@edit');
    Route::post('/adminpanel/dashboard/services/update/{service}','Adminpanel\ServicesController@update');

    // future adminpanel routes also should belong to the group

});


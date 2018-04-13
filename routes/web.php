<?php



Route::get('/test', 'MainController@test');


Route::get('/', 'MainController@index');
Route::get('/posts', 'MainController@postsList');
Route::get('/posts/{id}', 'MainController@show');
Route::get('/services', 'MainController@servicesList');
Route::get('/services/{id}', 'MainController@servicesShow');
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::get('/doctors', 'MainController@doctorsList');
Route::get('/doctor/{id}', 'MainController@doctorsShow');





Auth::routes();


Route::group(['middleware' => 'can:accessAdminpanel'], function() {

								/*=====POSTS=====*/

    Route::get('/adminpanel/dashboard/posts', 'Adminpanel\Posts@index');
    Route::get('/adminpanel/dashboard/posts/create', 'Adminpanel\Posts@create');
    Route::post('/adminpanel/dashboard/posts', 'Adminpanel\Posts@store');
    Route::post('/adminpanel/dashboard/posts/update/{post}', 'Adminpanel\Posts@update');
    Route::get('/adminpanel/dashboard/posts/edit/{post}', 'Adminpanel\Posts@edit');
    Route::delete('/adminpanel/dashboard/posts', 'Adminpanel\Posts@destroy')->name('post.delete');
    Route::post('/adminpanel/dashboard/posts/upload', 'Adminpanel\Posts@upload');

    // ALBUMS
    Route::get('/adminpanel/dashboard/albums', 'Adminpanel\AlbumsController@index');
    Route::get('/adminpanel/dashboard/albums/create', 'Adminpanel\AlbumsController@create');
    Route::post('/adminpanel/dashboard/albums/store', 'Adminpanel\AlbumsController@store');
    Route::get('/adminpanel/dashboard/albums/{id}', 'Adminpanel\AlbumsController@show');
    Route::delete('/adminpanel/dashboard/albums/', 'Adminpanel\AlbumsController@destroy');  
    Route::post('/adminpanel/dashboard/albums/update/{album}', 'Adminpanel\AlbumsController@update');
    Route::get('/adminpanel/dashboard/albums/edit/{album}', 'Adminpanel\AlbumsController@edit');


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



    // DOCTORS


    Route::get('/adminpanel/dashboard/doctors/', 'Adminpanel\DoctorsController@index');
    Route::get('/adminpanel/dashboard/doctors/create', 'Adminpanel\DoctorsController@create');
    Route::post('/adminpanel/dashboard/doctors/store', 'Adminpanel\DoctorsController@store');
    Route::post('/adminpanel/dashboard/doctors/update/{doctor}', 'Adminpanel\DoctorsController@update');
    Route::get('/adminpanel/dashboard/doctors/edit/{doctor}', 'Adminpanel\DoctorsController@edit');
    Route::delete('/adminpanel/dashboard/doctors/', 'Adminpanel\DoctorsController@destroy');

    



    // future adminpanel routes also should belong to the group

});


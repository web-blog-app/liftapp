<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {

	Route::get('/', 'HomeController@show'
	)-> name('home');

	Route::get('/user', 'UserController@show'
	)-> name('user');

	Route::post('/lifterrorStore', 'LifterrorController@store'
	)-> name('lifterrorStore');

	Route::post('/lifterrorUpdate', 'LifterrorController@update'
	)-> name('lifterrorUpdate');

	Route::post('/taskUpdate','TaskController@update'
	)-> name('taskUpdate');

	Route::post('/taskStore','TaskController@store'
	)-> name('taskStore');

	Route::post('/additionalworkStore', 'AdditionalworkController@store'
	)-> name('additionalworkStore');

	Route::post('/additionalworkUpdate', 'AdditionalworkController@update'
	)-> name('additionalworkUpdate');

 	Route::get('/requestBook', 'RequestbookController@show'
	)-> name('requestBook');

 	Route::get('/requestBook/search', 'LifterrorController@search'
	)-> name('searchLift');

 	Route::get('detail', 'DetailPageController@detailShow'
	)->name('detail');

	Route::post('detailUpdate', 'DetailController@update'
	)-> name('detailUpdate');

	Route::post('addDetail', 'DetailController@store'
	)-> name('addDetail');

	Route::get('changeDetail', 'ChengeDetailPageController@show'
	)->name('changeDetail');

	Route::post('addChengeDetail', 'ChengeDetailController@store'
	)-> name('addChengeDetail');

	Route::get('ChengeDetail/search', 'ChengeDetailController@search'
	)-> name('searchChengeDetail');

	Route::get('info', 'InfoController@show'
	);

	Route::post('info', 'InfoController@show'
	)-> name('info');
	Route::delete('/requestBook/delete/{id}', 'LifterrorController@delete'
	)-> name('deleteLift');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();



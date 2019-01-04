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


	

Route::get('/', 'IndexController@homeShow'
)-> name('home');

Route::post('/workUpdate', 'IndexController@workUpdate'
)-> name('workUpdate');

Route::post('/taskUpdate', 'IndexController@taskUpdate'
)-> name('taskUpdate');

Route::post('/addTask', 'IndexController@addTask'
)-> name('addTask');

Route::post('/addАdditionalWork', 'IndexController@addАdditionalWork'
)-> name('addАdditionalWork');

Route::post('/additionalWorkUpdate', 'IndexController@additionalWorkUpdate'
)-> name('additionalWorkUpdate');

Route::post('/addLift', 'IndexController@addLift'
)-> name('liftStore');


 Route::get('requestBook', 'IndexController@search'
)-> name('search');

Route::get('detail', 'IndexController@detailShow'
)->name('detail');

Route::post('detailUpdate', 'IndexController@detailUpdate'
)-> name('detailUpdate');

Route::post('addDetail', 'IndexController@addDetail'
)-> name('addDetail');

Route::get('changeDetail', 'IndexController@chengeDetailShow'
)->name('changeDetail');

Route::post('addChengeDetail', 'IndexController@addChengeDetail'
)-> name('addChengeDetail');

Route::get('searchChengeDetail', 'IndexController@searchChengeDetail'
)-> name('searchChengeDetail');

Route::get('info', 'IndexController@infoShow'
)-> name('info');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();



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

Route::get('/', 'IndexController@homeShow'
);
Route::post('workUpdate', 'IndexController@workUpdate'
)-> name('workUpdate');

Route::post('addLift', 'IndexController@addLift'
)-> name('liftStore');


Route::get('requestBook', 'IndexController@lifterrorShow'
);

 Route::post('requestBook', 'IndexController@search'
)-> name('search');



Route::get('detail', 'IndexController@detailShow'
);
Route::post('detailUpdate', 'IndexController@detailUpdate'
)-> name('detailUpdate');

Route::post('addDetail', 'IndexController@addDetail'
)-> name('addDetail');



Route::get('changeDetail', 'IndexController@chengeDetailShow'
);

Route::post('addChengeDetail', 'IndexController@addChengeDetail'
)-> name('addChengeDetail');


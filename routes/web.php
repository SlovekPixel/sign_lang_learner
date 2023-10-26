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
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'profileController@home')->name('home')->middleware('guest');
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/static', 'profileController@leaning')->name('profile');
    Route::get('/anim', 'profileController@showGame')->name('anim');
    Route::get('/face', 'profileController@showFaces')->name('face');
    Route::post('/result/save', 'profileController@saveResult')->name('save.result');
    Route::post('/unsub', 'profileController@unsub')->name('unsub');
    Route::post('/sub', 'profileController@sub')->name('sub');

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/admin', 'adminController@showFaces')->name('faces');
        Route::get('/admin/upload', 'adminController@uploadDefault')->name('upload.default');
        Route::post('/admin/upload', 'adminController@saveDefault')->name('save.default');

        Route::get('/admin/{face_id}', 'adminController@uploadEmots')->name('upload.emots');
        Route::post('/admin/save', 'adminController@saveEmot')->name('save.emot');
    });

    Route::post('/email/send', 'profileController@newEmail')->name('new.email');
    Route::post('/password/send', 'profileController@newPassword')->name('new.password');

});


Auth::routes();


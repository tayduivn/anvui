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

Route::middleware(['web'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/lang/{lang}', "HomeController@lang")->name('lang');
    Route::get('/gioi-thieu', 'IntroController@index')->name('intro.index');
    Route::get('/tin-tuc', 'NewsController@index')->name('news.index');
    Route::get('/tin-tuc/{id}/{slug}.html', 'NewsController@detail')->name('news.detail');

    Route::get('/tuyen-dung', 'RecruitController@index')->name('recruit.index');
    Route::get('/tuyen-dung/{id}/{slug}.html', 'RecruitController@detail')->name('recruit.detail');
    Route::get('/gioi-thieu-phan-mem', 'PageController@pageSofwareIntro')->name('page.software');

    Route::post('/register_use', 'RegisterUseController@store')->name('register_use.store');
});
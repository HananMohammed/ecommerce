<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
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

// Dashboard Route
Route::auth();

Route::get('lang/{locale}', 'langcontroller@lang')->name('lang');

Route::get('/admin', 'DashboardController@index')->name('home')->middleware('auth');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function (){

    //Supper Admin Routes
    Route::group(["middleware"=>'can:manage.users'],function (){

        Route::resource('users' ,'UsersController',['except'=>['show','create','store']]);
        Route::resource('dmails','ContactMailsController')->only(['index' , 'show' , 'destroy']);
        Route::post('ddownload/{id}','DownloadAttachController@download')->name('download');

    });


    //Auther Admin Routes
    Route::group(['middleware' => ['can:author.admins']], function () {
        Route::resource('slider','SliderController')->except('show');
        Route::get('about/edit','AboutController@edit')->name('about.edit');
        Route::put('about/update','AboutController@update')->name('about.update');
        Route::get('mission/edit','MissionController@edit')->name('mission.edit');
        Route::put('mission/update','MissionController@update')->name('mission.update');
        Route::resource('/phone','PhonesController')->only(['index' , 'store', 'destroy']);
        Route::resource('/email','EmailsController')->only(['index' , 'store', 'destroy']);
//        Route::resource('/dmap','MapController');
//        Route::resource('/daddress','AddressController');
//        Route::resource('/dsocial','SocialDataController');
    });
});

Route::group(['middleware'=>['auth','can:user.admins']],function(){
    Route::resource('/dseo','SeoController');

});
Route::group(['middleware'=>['auth','can:author.user']],function(){
//you can use this middleware in case you want to add section that include auther and user privilage
    Route::resource('/dcategory','CategoryController');
    Route::resource('/dproject','ProjectController');

});

Auth::routes();

//Front Routes
Route::namespace('front')->name('front.')->group(function (){
    Route::get('/','HomepageController@index')->name('homepage');
});

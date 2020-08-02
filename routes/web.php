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

Route::auth();
Route::get('lang/{locale}', 'langcontroller@lang')->name('lang');
Route::get('/home', 'DashboardController@index')->name('home')->middleware('auth');
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage.users')->group(function (){
    Route::resource('users' ,'UsersController',['except'=>['show','create','store']]);
    Route::resource('dmails','ContactMailsController');
    Route::post('ddownload/{id}','DownloadAttachController@download')->name('download');
});
Route::group(['middleware' => ['auth','can:author.dashboard']], function () {
    Route::resource('/dslider','SliderController');
    Route::resource('/dabout','AboutController');
    Route::resource('/dmission','MissionController');
    Route::resource('/dfeatures','FeaturesController');
    Route::resource('/dphone','PhonesController');
    Route::resource('/dmail','EmailsController');
    Route::resource('/dmap','MapController');
    Route::resource('/daddress','AddressController');
    Route::resource('/dsocial','SocialDataController');
});
Route::group(['middleware'=>['auth','can:user.dashboard']],function(){
    Route::resource('/dseo','SeoController');

});
Route::group(['middleware'=>['auth','can:author.user']],function(){
//you can use this middleware in case you want to add section that include auther and user privilage
    Route::resource('/dcategory','CategoryController');
    Route::resource('/dproject','ProjectController');

});

Auth::routes();
Route::get('/',function (){
    return view('index');
});
Route::resource('/form' ,'ContactFormController');

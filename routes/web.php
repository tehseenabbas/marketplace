<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


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




Route::get('/home', function () {
    return view('home');
});


Route::get('/auth', function () {
    return view('backend.admin.index');
});

Route::get('/dashboard' ,'DashboardController@index');

//admin
Route::group(['prefix'=>'auth'],function(){
    Route::resource('/category','CategoryController');
    Route::resource('/subcategory','SubcategoryController');
    Route::resource('/childcategory','ChildcategoryController');


});

Route::get('/','MenuController@menu');

//ads
Route::get('/ads/create', 'AdvertisementController@create')->name('ads.create')->middleware('auth');
Route::post('/ads/store', 'AdvertisementController@store')->middleware('auth')->name('ads.store');
Route::get('/ads', 'AdvertisementController@index')->name('ads.index')->middleware('auth');
Route::get('/ads/{id}/edit', 'AdvertisementController@edit')->name('ads.edit')->middleware('auth');
Route::put('/ads/{id}/update', 'AdvertisementController@update')->name('ads.update')->middleware('auth');
Route::delete('/ads/{id}/delete', 'AdvertisementController@destroy')->name('ads.destroy')->middleware('auth');


Route::get('/ad-pending','AdvertisementController@pendingAds')->name('pending.ad');

//profile

Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
Route::post('/fileUpload', 'UploadFilesController@create');
Route::post('/profile', 'ProfileController@updateProfile')->name('update.profile')->middleware('auth');


//user ads
Route::get('/ads/{userId}/view','FrontendController@viewUserAds')->name('show.user.ads');


Route::get(
    '/product/{categorySlug}',
    'FrontendController@findBasedOnCategory'
)
    ->name('product.category');

Route::get('/product/{categorySlug}/{subcategorySlug}', 'FrontendController@findBasedOnSubcategory')
    ->name('product.subcategory');


Route::get(
    '/product/{categorySlug}/{subcategorySlug}/{childCategorySlug}',
    'FrontendController@findBasedOnChildcategory'
)
    ->name('product.childcategory');
Route::get('/products/{id}/{slug}', 'FrontendController@show')
    ->name('product.view');









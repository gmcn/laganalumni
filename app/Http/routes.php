<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//home page
Route::get('/', 'homeController@alumni', function () {
    return view('public.welcome',compact('users'));
});


Route::get('news', 'newsController@articles');
Route::get('terms', 'publicController@terms');

Route::get('voucher', 'publicController@voucherRegistration');
Route::post('voucher', 'publicController@postVoucher');
Route::get('voucher', 'publicController@getVoucher');

Route::get('show', 'publicController@voucherShow');
Route::get('contact', 'pagesController@contact');
Route::get('about', 'pagesController@about');
Route::get('volunteer', 'pagesController@volunteer');
Route::get('donate', 'pagesController@donate');
Route::get('support', 'pagesController@support');

//register
Route::get('registration', 'privateController@index');
Route::get('registration/{lchid}', 'publicController@show');
Route::post('registration', 'publicController@update');

//update user profile
Route::get('profile', 'profileController@showprofile');
Route::post('profile', 'profileController@updateProfile');

//private routes
Route::get('success', 'privateController@success');
Route::get('search', 'publicController@search');
Route::get('alumni', 'alumniController@classof');

//backoffice, admin are here
Route::get('admin', 'adminController@index');

//backoffice Users
Route::get('admin/users-list', 'adminController@userslist');
Route::get('admin/user-view/{id}', 'adminController@showUser');
Route::get('admin/alumnidownload', 'adminController@alumniExport');
Route::get('admin/newsletterdownload', 'adminController@newsletterExport');

//backoffice Pages
Route::get('admin/pages-list', 'adminController@pageslist');
Route::get('admin/edit-page/{id}', 'adminController@showPages');
Route::post('admin/edit-page/{id}', 'adminController@editPages');

//backoffice news
Route::get('admin/news-list', 'adminController@newslist');
Route::get('admin/add-news', 'adminController@addNews');
Route::post('admin/add-news', 'adminController@createNews');
Route::get('admin/edit-news/{id}', 'adminController@showNews');
Route::post('admin/edit-news/{id}', 'adminController@editNews');

//backoffice events
Route::get('admin/add-events', 'adminController@addEvent');
Route::get('admin/events-list', 'adminController@eventslist');
Route::post('admin/add-events', 'adminController@createEvent');
Route::get('admin/edit-event/{id}', 'adminController@showEvents');
Route::post('admin/edit-event/{id}', 'adminController@editEvent');

//backoffice yearbooks
Route::get('admin/yearbooks-list', 'adminController@listYearbooks');
Route::get('admin/add-yearbook', 'adminController@addYearbooks');
Route::post('admin/add-yearbook', 'adminController@createYearbook');
Route::get('admin/edit-yearbook/{id}', 'adminController@showYearbooks');
Route::post('admin/edit-yearbook', 'adminController@editYearbook');


Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
// ADDED THIS FOR FILE MANAGER...
Route::group(array('before' => 'auth'), function ()
{
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');
   
});

// Registration routes...
Route::get('retailer/register', 'Auth\AuthController@getRegister');
Route::post('retailer/register', 'Auth\AuthController@postRegister');

Route::auth();

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

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::resource('/activities', 'activitiescontroller');
Route::resource('/history', 'historycontroller');
Route::resource('/viongozi', 'viongozicontroller');
Route::resource('/matawi', 'matawicontroller');
Route::resource('/contacts', 'contactscontroller');
Route::get('/miradi', 'tamsyascontroller@miradi')->name('miradi');
Route::get('/programs', 'tamsyascontroller@programs')->name('programs');
Route::get('/events', 'tamsyascontroller@events')->name('events');


Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
Route::resource('/contacts','contactscontroller');

Route::group(['middleware' => 'auth:admin'], function () {
  Route::resource('/settings','backend\settingscontroller');
  Route::resource('/admins','backend\adminscontroller');
  Route::resource('/mawasiliano','backend\mawasilianocontroller');
  Route::resource('/projects','backend\projectscontroller');
  Route::resource('/leaders','backend\leaderscontroller');
  Route::resource('/backgrounds','backend\backgroundscontroller');
});



